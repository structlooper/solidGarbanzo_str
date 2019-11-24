<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function view()
    {
        $datas = User::all();

        return view('superAdmin.adminDas')->with('datas', $datas);
    }
    public function profileApprove(request $request , $id)
    {
        $users = User::find($id);
        $users->status = $request->input('status');
        $users->update();
        return  \redirect('/adminDashboard')->with('status', 'profile approved successfuly');
    }
    public function userProfiles()
    {
        $datas = User::all();

        return view('superAdmin.registeredEntries')->with('datas', $datas);
    }
    public function updateAdminProfile(request $request)
    {
        $data = User::findOrFail('1');
        return view('superAdmin.updateProfile')->with('data', $data);
        // return $request;
    }
    public function updating(request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->update();
        return  \redirect('/adminDashboard')->with('status', 'profile Updated successfuly');
    }
}
