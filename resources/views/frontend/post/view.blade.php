@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_descriptiopn', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="category-heading">
                    <h4>
                        {!! $post->name !!}
                    </h4>
                </div>
                <div class="mt-3">
                    <h6>{{$post->category->name.' / '.$post->name}}</h6>
                </div>
                <div class="card card-shadow mt-4">
                    <div class="card-body post-description">
                        {!! $post->description !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="border p-2 my-2">
                    <h4>Advertising Area</h4>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Latest Post</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($latest_post as $latest_post_list)
                            <a href="{{ url('tutorial/'.$latest_post_list->category->slug.'/'.$latest_post_list->slug) }}" class="text-decoration-none">
                                <h6>{{$latest_post_list->name}}</h6>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
