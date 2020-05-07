@extends('layouts.confer.master')

@section('blognews')
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">وبلاگ</h2>
                    <h4>اخبار سینمای ایران و جهان را در اینجا مطالعه کنید</h4>
                    <nav aria-label="breadcrumb">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol> --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="our-blog-area " style="padding-top:100px;">
    <div class="container">
        <div class="row">
            

            <!-- Single Blog Area -->
            @foreach ($blogs as $blog)
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-blog-area " data-wow-delay="300ms">
                    <!-- Single blog Thumb -->
                     <div class="single-blog-thumb">
                     <img src="assets/img/blog/{{$blog->image}}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                        <a class="blog-title" href="#">{{$blog->title}}</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>{{$blog->user->name}}</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>{{$blog->news_date}}</a>
                        </div>
                    <p>{{$blog->description}}</p>
                     </div>
                    
                    </div>
                 </div>   
            @endforeach
        

     


        <div class="row">
            <div class="col-12">
                {{-- <div class="more-blog-btn text-center">
                    <a class="btn confer-btn" href="#">Load more <i class="zmdi zmdi-refresh"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection