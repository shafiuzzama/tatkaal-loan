<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function sendOtp(Request $request) {
        $email1 = $request->email;
        $oned = Admin::where('email', $email1)->first();

        if ($oned !== null) {
            if (Hash::check($request->input('password'), $oned['password'])) {
                $otp = mt_rand(100001, 999999);
                
                // Comment out the email sending logic
                /*
                $otpmsg = "Hi Bita User, Welcome To Bita Your OTP is - ".$otp."";
                $template_name = "xotpx";
                $mobile = $oned['mobile'];
                $msg = "$otp for admin login. please don't share with anyone";
                 
                $to ="info@Bita.com";
                $subject = "Bita OTP";
                
                $body = '...'; // Your email body here
                
                $header  = "from:info@Bita.com \r\n";
                $header .= "cc:info@Bita.com \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
                
                $retval = mail($to, $subject, $body, $header); 
                if ($retval == null) {
                    return ['res' => false, 'msg' => 'Failed to send OTP email.'];
                }
                */
                
                // Save the OTP to the database
                Admin::where('email', $request->input('email'))->update(['otp' => $otp]);
                return ['res' => true, 'msg' => 'OTP sent and stored successfully', 'otp' => $otp];
            } else {
                return ['res' => false, 'msg' => 'Email or password incorrect.'];
            } 
        } else {
            Log::error('Admin not found for email: ' . $email1);
            return ['res' => false, 'msg' => 'Admin not found.'];
        }
    }
}
