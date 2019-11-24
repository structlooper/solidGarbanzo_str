
@extends('layouts.app')

@section('title')

    Student | Portal
@endsection

@section('content')
<div class="container border rounded-circle">
        <h1 class="text-center">Welcome to Student Portal</h1>
</div>
@if (session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        
        @endif
<div class="container h-100">
    <div class="row h-100">
        <div class="col-lg-12">
        
            <nav class="navbar navbar-expand navbar-dark bg-dark ">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0 text-light" href="/studentPortel">Student Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2 pl-0 btn btn-primary text-light" href="/studentPortel/assigmentsList"> New Assignments <br> list </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2 pl-0 btn btn-primary text-light" href="/editStudentProfile"> Edit Profile <br> Details </a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </nav>
        
    </div>
        <main class="col-lg-12">
            
            <div class=" mt-2">
                @yield('contant_student')
            </div>
        </main>
    </div>
</div>
@endsection
