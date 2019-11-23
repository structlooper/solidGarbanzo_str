@extends('layouts.app')

@section('title')

    Teacher | Portal
@endsection

@section('content')
<div class="container border">
        <h1 class="text-center">Welcome to Teacher Portal</h1>
</div>
<div class="container h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-2 p-0 bg-dark">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0 text-light" href="/teacherPortel">Teacher Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2 pl-0 btn btn-primary text-light" href="/teacherPortel/newUpload">Upload New <br> Assignment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2 pl-0 btn btn-primary text-light" href="/teacherPortel/ShowDetails">Show  Assignment<br> Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mt-2 pl-0 btn btn-primary text-light" href="/teacherPortel/SubmitedDetails">Submited Assignment<br> Details</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col">
            <div class=" mt-2">
                @yield('contant_teacher')
            </div>
                
        </main>
    </div>
</div>
@endsection
