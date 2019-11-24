@extends('superAdmin.adminDas')

@section('admin_contant')
<div class="container py-4 border">
<form method="POST" action="/updating/{{$data->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" >
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" >
        </div>
    </div>

    <div class="form-group row">
        <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact no.') }}</label>

        <div class="col-md-6">
            <input id="contact" type="text" class="form-control"  name="contact" value="{{ $data->contact }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

        <div class="col-md-6">
            <input id="contact" type="text" class="form-control"  name="gender" value="{{ $data->gender }}">
        </div>
    </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="col-md-6">
                   <input id="address" type="text" class="form-control"  name="address" value="{{ $data->address }}">
                </div>
            </div>
    <div class="form-group row mb-0">
        <div class="col-md-12 offset-md-4">
            <button type="submit" class="btn btn-primary btn-lg">
                {{ __('Update') }}
            </button>
        </div>
    </div>
</form>
</div>
@endsection