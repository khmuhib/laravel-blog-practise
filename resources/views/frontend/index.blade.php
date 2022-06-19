@extends('layouts.app')

@section('title', "Kh Muhib")
@section('meta_descriptiopn', "Kh Muhib")
@section('meta_keyword', "Kh Muhib")

@section('content')
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($all_categories as $all_categories_item)
                        <a href="{{url('tutorial/'.$all_categories_item->slug)}}" class="text-decoration-none">
                            <div class="item">
                                <div class="card">
                                    <img src="{{asset('upload/category/'.$all_categories_item->image)}}" alt="" style="height: 200px;">
                                    <div class="card-body text-center">
                                        <h4 class="text-dark">{{$all_categories_item->name}} </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
