@extends('back.layouts.master')
@section('title', 'Edit PAGE')
@section('content')
    <br>
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{route('admin.users.create')}}" class="btn btn-primary rounded">Create user</a>
    </div>
    <h3 class="text-center">Update {{$user->name}}</h3>
    <form action="{{route('admin.users.update', [$user->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name"
                   type="text"
                   class="form-control"
                   name="name"
                   placeholder="Enter user name"
                   value="{{$user->name}}" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email"
                   type="text"
                   class="form-control"
                   name="email"
                   placeholder="Enter user email"
                   value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password"
                   type="text"
                   class="form-control"
                   name="password"
                   placeholder="Enter user password"
                   value="{{$user->password}}">
        </div>
        <button class="btn btn-success btn-block rounded">Save User</button>
    </form>

@endsection
