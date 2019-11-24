@extends('layouts.app')

@section('title')
    Admin | dashboard
@endsection

@section('content')
<div class="container border">
    <h1 class="text-center">Welcome to admin dashboard</h1>
</div>
    <div class="container my-4">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            
            @endif
        <div class="row">
            <a href="/adminDashboard" class="ml-4 col-lg-3 btn btn-danger">Admin Dashboard</a>
            <a href="/userProfiles" class="ml-4 col-lg-3 btn btn-danger">User Profiles</a>
             
            <a href="/updateAdminProfile" class="ml-4 col-lg-3 btn btn-danger">Edit Admin Profile</a>
        </div>
        
        <h1>welcome to admin Dashboard </h1> 
    </div>
    @yield('admin_contant')
    
@endsection