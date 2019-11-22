@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact no.') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control"  name="contact" value="{{ old('contact') }}"  required autocomplete="contact">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-2">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                        <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name='gender'>
                                            </div>
                                            male
                                        </div>
                                    
                                    </div>
                                                        
                                    <div class="col-md-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name='gender'>
                                            </div>
                                            Female
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input" name='gender'>
                                            </div>
                                        others
                                        </div>
                                    
                                    </div>
                            </div>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    
                         <div class="form-group row ">
                            <label for="" class="col-md-4 col-form-label text-md-right">profile image</label>
                            
                            <div class="col-md-6">
                                <input type="file" name="profileImage" />
                                <label class="">Select a image to upload</label> <br>   
                                
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Profile') }}</label>
    
                                <div class="col-md-6">
                                        <select class="form-control form-control" name='profile' required>
                                                <option>select profile</option>
                                                <option value="student">Student</option>
                                                <option value="teacher">Teacher</option>
                                        </select>
                                </div>
                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>

                            <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
        
                                    <div class="col-md-6">
                                        <textarea name="address" id="" cols="44" rows="4"></textarea>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
