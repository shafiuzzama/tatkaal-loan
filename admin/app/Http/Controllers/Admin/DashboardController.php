<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;
use DateTime;
use DateInterval;

class DashboardController extends Controller 
{
    /* dashboard login page start code */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $post_data = $request->input();
            unset($post_data['_token']);
            $oned = Admin::where('email', $request->input('email'))->first();
            if ($oned['email']) {

                $minutes_to_add = 5;

                $time = new DateTime($oned['updated_at']);
                $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

                $stamp = $time->format('Y-m-d H:i:s');

                if ($stamp > date('Y-m-d H:i:s')) {

                    if ($oned['otp'] == $post_data['otp']) {
                        if (Auth::guard('admin')->attempt($post_data)) {
                            return redirect()->route('dashboard');
                        } else {
                            return redirect()->back()->with('msg', ['type' => 'warning', 'text' => 'Email or password incorrect.']);
                        }
                    } else {
                        return redirect()->back()->with('msg', ['type' => 'warning', 'text' => 'Otp is incorrect.']);
                    }
                } else {
                    return redirect()->back()->with('msg', ['type' => 'warning', 'text' => 'Otp is incorrect after five minutes.']);
                }
            } else {
                return redirect()->back()->with('msg', ['type' => 'warning', 'text' => 'User Not Valid']);
            }
        }
        return view('admin.Auth.login');
    }
    /* dashboard login page end code */

    /* dashboard index page start code */
    public function index()
    {
        return view('admin.dash.dashboard');
    }
    /* dashboard index page end code */

    /* admin logout start code */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
    
   public function getUserData(Request $request)
 {
        $year = $request->input('year');

        // Dummy data until integrated with actual database
        $dummyData = $this->getDummyChartData($year);

        return response()->json(['data' => $dummyData]);
    }

    private function getDummyChartData($year)
    {
        // Dummy sales and purchase data for each month
        $dummySales = [500, 450, 600, 700, 500, 450, 600, 700, 750, 780, 850, 990];
        $dummyPurchase = [-210, -540, -450, -350, -210, -540, -450, -350, -200, -100, -700, -960];
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // If you need to generate dynamic dummy data based on year, you can modify it here
        
        return [
            'sales' => $dummySales,
            'purchase' => $dummyPurchase,
            'month' => $months
        ];
    }


    /* admin logout end code */
}
