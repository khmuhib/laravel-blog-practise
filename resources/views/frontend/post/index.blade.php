@extends('layouts.app')

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4>{{$category->name}}</h4>
                </div>
                @forelse ($post as $postItem)
                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            <a href="{{url('tutorial/'.$category->slug.'/'.$postItem->slug)}}" class="text-decoration-none">
                                <h2 class="post-heading">{{$postItem->name}}</h2>
                            </a>
                            <h6>
                                Posted on: {{$postItem->created_at->format('d-m-Y')}}
                                <span class="ms-3">Posted by: {{$postItem->user->name}}</span>
                            </h6>
                        </div>
                    </div>

                @empty
                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            <h2 class="post-heading">There is no post in this category</h2>
                        </div>
                    </div>

                @endforelse


                <div class="your-paginate">
                    {{$post->links()}}
                </div>
            </div>
            <div class="col-md-3">
                <div class="border p-2">
                    <h4>Advertising Area</h4>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
