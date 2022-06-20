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

<div class="py-5 bg-secondary">
    <div class="container">
        <div class="border text-center p-3">
            <h1 class="aaa">Advertising</h1>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 >Kh Muhib</h4>
                <div class="underline"></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum quaerat ipsam reiciendis qui similique nulla exercitationem, libero voluptatibus voluptate sapiente, rem magnam dolore impedit alias quam, unde est odio nobis! Recusandae excepturi consequuntur enim mollitia officiis minima, fugit porro vel eaque, neque distinctio veniam, earum eius dolores consequatur atque quasi!</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Category List</h4>
                <div class="underline"></div>
            </div>
            @foreach ($all_categories as $all_categories_item)
            <div class="col-md-3 mb-2">
                <a href="{{url('tutorial/'.$all_categories_item->slug)}}" class="text-decoration-none">
                    <div class="card card-body">
                        <h4>{{$all_categories_item->name}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All latest Post</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
                @foreach ($latest_posts as $latest_post_item)
                <div class="col-md-12 mb-2 ">
                    <a href="{{url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}" class="text-decoration-none text-dark">
                        <div class="card card-body bg-secondary shadow">
                            <h4>{{$latest_post_item->name}}</h4>
                            <h6>Posted on: {{$latest_post_item->created_at->format('d-m-Y')}}</h6>
                        </div>

                    </a>

                </div>
                @endforeach

            </div>
            <div class="col-md-4">
                <div class="border mb-2">
                    <h4>Advertising</h4>
                </div>
                <div class="border mb-2">
                    <h4>Advertising</h4>
                </div>
                <div class="border mb-2">
                    <h4>Advertising</h4>
                </div>
                <div class="border mb-2">
                    <h4>Advertising</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
