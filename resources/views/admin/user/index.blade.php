@extends('layouts.master')

@section('title', 'User List')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>User Page</h4>
        </div>

        <div class="card-body">

            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered" >
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role_as == '1' ? 'Admin': 'User'}}</td>
                            <td>
                                <a href="{{url('admin/user/'.$user->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('admin/user-delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>







        </div>
    </div>
</div>

@endsection
