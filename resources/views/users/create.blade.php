@extends('layouts.app')


@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">

<div class="page-header">
    <h1><i class="glyphicon glyphicon-user"></i> Users / Create </h1>
</div>

    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('users.store') }}" method="POST">

              <input type="hidden" name="_method" value="POST">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('password')) has-error @endif">
                       <label for="password-field">Password</label>
                    <input type="password" id="password-field" name="password" class="form-control" value="{{ old("password") }}"/>
                       @if($errors->has("password"))
                        <span class="help-block">{{ $errors->first("password") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="email" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('birthdate')) has-error @endif">
                       <label for="birthdate-field">birthdate</label>
                    <input type="date" id="birthdate-field" name="birthdate" class="form-control" value="{{ old("birthdate") }}"/>
                       @if($errors->has("birthdate"))
                        <span class="help-block">{{ $errors->first("birthdate") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('phone')) has-error @endif">
                       <label for="phone-field">phone</label>
                    <input type="text" id="phone-field" name="phone" class="form-control" value="{{ old("phone") }}"/>
                       @if($errors->has("phone"))
                        <span class="help-block">{{ $errors->first("phone") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('address')) has-error @endif">
                       <label for="address-field">address</label>
                    <input type="text" id="address-field" name="address" class="form-control" value="{{ old("address") }}"/>
                       @if($errors->has("address"))
                        <span class="help-block">{{ $errors->first("address") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('gender')) has-error @endif">
                       <label for="gender-field">Gender</label>
                       <select name="gender" >
                        <option value="male">male</option>
                        <option value="female">female</option>
                      </select>
                       @if($errors->has("gender"))
                        <span class="help-block">{{ $errors->first("gender") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('city')) has-error @endif">
                       <label for="city-field">City</label>
                       <select name="city" >
                        <option value="cairo">cairo</option>
                        <option value="alex">alex</option>
                        <option value="aswan">aswan</option>
                        <option value="sainai">sainai</option>
                      </select>
                       @if($errors->has("city"))
                        <span class="help-block">{{ $errors->first("city") }}</span>
                       @endif
                </div>

                <div class="form-group @if($errors->has('role')) has-error @endif">
                       <label for="role-field">Role</label>
                       <select name = "role" >
                        <option value="doctor">doctor</option>
                        <option value="nurse">nurse</option>
                        <option value="patient">patient</option>
                      </select>
                       @if($errors->has("role"))
                        <span class="help-block">{{ $errors->first("role") }}</span>
                       @endif
                </div>


                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $('.date-picker').datepicker({
      });
    </script>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
