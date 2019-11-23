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
}
