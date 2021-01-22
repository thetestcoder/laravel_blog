@extends('back.layouts.master')
@section('title', 'Users PAGE')
@section('content')
    <br>
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{route('admin.users.create')}}" class="btn btn-primary rounded">Create user</a>
    </div>
    <h2>All Users</h2>
    @if(session('success'))
        <div class="aler alert-success">
            {{session('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <tr>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Role</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                Admin

            </td>
            <td>
                <a href="{{route('admin.users.edit', [$user->id])}}" class="btn btn-warning btn-sm rounded">
                    <i class="meterial-icons">edit</i>
                    Edit
                </a>
                <form action="{{route('admin.users.destroy', [$user->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger btn-sm rounded">
                        <i class="meterial-icons">edit</i>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
