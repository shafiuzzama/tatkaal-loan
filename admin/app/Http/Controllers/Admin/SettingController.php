<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Admin;
use App\Models\FAQ;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.setting');
    }

    public function setting_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'questions' => 'required',
            'answers' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $setting = new FAQ();
        $setting->questions = $request->questions;
        $setting->answers = $request->answers;
        $setting->save();

        return redirect('admin/faq-list')->with('message', 'Data Added Successfully');
    }

    public function settinglist()
    {
        $data['settinglist'] = FAQ::all();
        return view('admin.setting.settinglist', $data);
    }

    public function editSetting($id)
    {
        $data['setting'] = FAQ::findOrFail($id);
        return view('admin.setting.settingedit', $data);
    }

    public function updateSetting(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'questions' => 'required',
            'answers' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $setting = FAQ::findOrFail($id);
        $setting->questions = $request->questions;
        $setting->answers = $request->answers;

        $setting->save();

        return redirect('admin/faq-list')->with('message', 'Data Updated Successfully');
    }

    public function deleteSetting($id)
    {
        $setting = FAQ::findOrFail($id);
        $setting->delete();

        return redirect('admin/faq-list')->with('message', 'Data Deleted Successfully');
    }
}
