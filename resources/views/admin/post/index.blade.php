@extends('layouts.master')

@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Post <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a></h4>
        </div>
        <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Post Category</td>
                        <td>Post Name</td>
                        <td>Post Slug</td>
                        <td>State</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->status == '1' ? 'Hidden':'Visible'}}</td>
                            <td>
                                <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




</div>

@endsection
