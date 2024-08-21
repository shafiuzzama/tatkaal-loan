<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kyc;
use App\Models\Transaction;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use App\helpers;


class HomeController extends Controller
{

    public function signup(Request $request)
    {
        // Session::flush();
        //  die('flace');
        $otp = mt_rand(100000, 999999);
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric|digits:10',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::where('mobile_no', $request->mobile)->first();


        if ($user) {
            $user->password = Hash::make($otp);
            $user->save();


            Cache::put('otp', $otp);
            Cache::put('mobile', $request->mobile);
            return response()->json([
                'status' => true,
                'message' => 'login otp',
                'otp' => $otp,
                // 'sessionOtp' => Cache::get('otp'),
                // 'sessionId' => $keyID ,
            ], 200)->withoutCookie(session_name());
        } else {

            Cache::put('otp', $otp);
            Cache::put('mobile', $request->mobile);

            return response()->json([
                'status' => true,
                'message' => 'register otp',
                'otp' => $otp,

            ], 200)->withoutCookie(session_name());
        }
    }


    public function signupotp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => 'required|numeric|digits:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        $enterOtp = (int)$request->input('otp');

        //   Cache::get('otp');
        // echo  Cache::get('mobile');
        // die;
        if (Cache::get('otp') === $enterOtp) {
            $user = User::where('mobile_no', Cache::get('mobile'))->first();

            if ($user) {
                $credentials = [
                    'mobile_no' => Cache::get('mobile'),
                    'password' =>  Cache::get('otp'),
                ];

                if (Auth::attempt($credentials)) {
                    $authenticatedUser = Auth::user();
                    $token = $authenticatedUser->createToken('authToken')->accessToken;


                    Cache::forget('mobile');
                    Cache::forget('otp');

                    return response()->json([
                        'status' => true,
                        'message' => 'Login successful',
                        'access_token' => $token,
                        'user' =>  $authenticatedUser,


                    ], 200);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Login failed',
                    ], 401);
                }
            } else {
                $user = new User();
                $user->mobile_no = Cache::get('mobile');
                $user->password = bcrypt(Cache::get('otp'));

                if ($user->save()) {
                    $credentials = [
                        'mobile_no' => Cache::get('mobile'),
                        'password' =>  Cache::get('otp'),
                    ];

                    if (Auth::attempt($credentials)) {
                        $authenticatedUser = Auth::user();
                        $token = $authenticatedUser->createToken('authToken')->accessToken;

                        Cache::forget('mobile');
                        Cache::forget('otp');

                        return response()->json([
                            'status' => true,
                            'message' => 'Login successful',
                            'access_token' => $token,
                            'user' =>  $authenticatedUser,


                        ], 200);
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Login failed',
                        ], 401);
                    }
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'User not saved',
                    ], 401);
                }
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Invalid OTP',
                'enterotp' => $enterOtp,
                'sessionOtp' => Cache::get('otp')
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if ($user) {
            $user->token()->revoke();
            return response()->json(['status' => 1, 'message' => 'Logged out successfully'], 200);
        }


        return response()->json(['status' => 0, 'message' => 'User not authenticated'], 401);
    }
    // public function logout(Request $request)
    // {
    //     $user = $request->user();

    //     if ($user) {
    //         // Check if the user has a token
    //         if ($user->token()) {
    //             // Revoke the user's token
    //             $user->token()->revoke();

    //             return response()->json(['status' => 1, 'message' => 'Logged out successfully'], 200);
    //         } else {
    //             return response()->json(['status' => 0, 'message' => 'User does not have an active token'], 401);
    //         }
    //     }

    //     return response()->json(['status' => 0, 'message' => 'User not authenticated'], 401);
    // }


    public function user(Request $request)
    {
        $user = $request->user();
        $userData =  User::find($user->id);

       $userData->image = url($userData->image );
        $userKyc = Kyc::where('user_id', $user->id)->first();
        $userData->userKyc = $userKyc;
        if (!empty($userKyc->user_image)) {
            $userKyc->user_image = url($userKyc->user_image);
        }

        if (!empty($userKyc->adhar_front)) {
            $userKyc->adhar_front = url($userKyc->adhar_front);
        }

        if (!empty($userKyc->adhar_back)) {
            $userKyc->adhar_back = url($userKyc->adhar_back);
        }

        return response()->json(['status' => 1, 'data' => $userData], 200);
    }
    
    
   public function profileImage(Request $request)
{
    try {
        $login_user = $request->user();
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'nullable',
        ]);

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $userImage = $request->image->move(public_path('image/userImage/'), $imageName);
            $image_fullname = 'image/userImage/' . $imageName;
            if ($login_user->image) {
                unlink($login_user->image);
            }
        } else {
            $image_fullname = null;
        }

        $userUpdate = User::where('id', $login_user->id)->first();

        $userUpdate->image = $image_fullname;
        $userUpdate->name = $request->name ?? $login_user->name ;
        $userUpdate->save();

        $userData = User::where('id', $login_user->id)->first();
        $userData->image = url($userData->image);

        return response()->json(['message' => 'Profile uploaded successfully', 'data' => $userData]);
    } catch (\Exception $e) {
        return response()->json(['message' => 'An error occurred while uploading profile', 'error' => $e->getMessage()], 500);
    }
}

}

