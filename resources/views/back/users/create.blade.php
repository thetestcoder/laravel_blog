@extends('back.layouts.master')
@section('title', 'Users PAGE')
@section('content')
    <br>
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{route('admin.users.create')}}" class="btn btn-primary rounded">Create user</a>
    </div>
    <h3 class="text-center">Create a new user</h3>
    <form action="{{route('admin.users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name"
                   type="text"
                   class="form-control"
                   name="name"
                   placeholder="Enter user name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email"
                   type="text"
                   class="form-control"
                   name="email"
                   placeholder="Enter user email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password"
                   type="text"
                   class="form-control"
                   name="password"
                   placeholder="Enter user password">
        </div>
        <button class="btn btn-success btn-block rounded">Save User</button>
    </form>

@endsection
