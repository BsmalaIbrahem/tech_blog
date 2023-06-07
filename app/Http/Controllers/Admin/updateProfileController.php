<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class updateProfileController extends Controller
{
    public function edit_name(){
        $admin = Admin::where('id', auth()->guard('admin')->user()->id)->first();
        return $admin->name;
    }

    public function update_name(Request $request){
        $request->validate(['name'=> 'required | string']);
        Admin::where('id', auth()->guard('admin')->user()->id)
            ->update(['name' => $request->name]);
    }

    public function edit_email(){
        $admin = Admin::where('id', auth()->guard('admin')->user()->id)->first();
        return $admin->email;
    }

    public function update_email(Request $request){
        $request->validate(['email'=> 'required | email | unique:admins']);
        Admin::where('id', auth()->guard('admin')->user()->id)
            ->update(['email' => $request->email]);
    }

    public function edit_photo(){
        $admin = Admin::where('id', auth()->guard('admin')->user()->id)->first();
        return $admin->photo;
    }

    public function update_photo(){
    }

    public function update_password(){
    }
}
