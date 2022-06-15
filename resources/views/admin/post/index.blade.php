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

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Post Category</td>
                        <td>Post Name</td>
                        <td>Post Slug</td>
                        <td>Post Description</td>
                        <td>State</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->categroy->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->status == '1' ? 'Hidden':'Visible'}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>




</div>

@endsection