@extends('layouts.app')

@section('content')
<div class="page-header">
        <h1>Posts / Show #{{$user->id}}</h1>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('users.edit', $user->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
</div>
    <div class="row">
        <div class="col-md-12">

            <form action="#">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$user->id}}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">Username</label>
                     <p class="form-control-static">{{ $user->name  }}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">Birthdate</label>
                     <p class="form-control-static">{{ $user->birthdate  }}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">Address</label>
                     <p class="form-control-static">{{ $user->address  }}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">Gender</label>
                     <p class="form-control-static">{{ $user->gender  }}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">City</label>
                     <p class="form-control-static">{{ $user->city  }}</p>
                </div>

                <div class="form-group">
                     <label for="user_id">Role</label>
                     <p class="form-control-static">{{ $user->role  }}</p>
                </div>



                <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$user->body}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
