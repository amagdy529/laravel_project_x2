@extends('layouts.app')


@section('content')
<div class="page-header clearfix">
    <h1>
        <i class="glyphicon glyphicon-user"></i> Users
        <a class="btn btn-success pull-right" href="{{ route('users.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
    </h1>

</div>

  <div class="row">
      <div class="col-md-12">
          @if($users->count())
              <table class="table table-condensed table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>birthdate</th>
                          <th>phone</th>
                          <th>address</th>
                          <th>gender</th>
                          <th>city</th>
                          <th>role</th>
                          <th class="text-right">OPTIONS</th>
                      </tr>
                  </thead>

                  <tbody>
                      @foreach($users as $post)
                          <tr>
                              <td>{{$post->id}}</td>
                              <td>{{$post->name}}</td>
                              <td>{{$post->birthdate}}</td>
                              <td>{{$post->phone}}</td>
                              <td>{{$post->address}}</td>
                              <td>{{$post->gender}}</td>
                              <td>{{$post->city}}</td>
                              <td>{{$post->role}}</td>
                              <td>{{$post->body}}</td>
                              <td class="text-right">
                                  <a class="btn btn-xs btn-primary" href="{{ route('users.show', $post->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                  <a class="btn btn-xs btn-warning" href="{{ route('users.edit', $post->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                  <form action="{{ route('users.destroy', $post->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
              {!! $users->render() !!}
          @else
              <h3 class="text-center alert alert-info">Empty!</h3>
          @endif

      </div>
  </div>

@endsection
