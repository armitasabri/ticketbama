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
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/story.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اخبار جنجالی فیلم نیمروز</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "ماجرای نیمروز" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/moon.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اکران مردمی فیلم شبی که ماه کامل شد</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "شبی که ماه کامل شد" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                    
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/world.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">دانستنی های جذاب دنیای سینما</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                   <p>نگاهی به فیلم های خارجی و مشاهده ی فیلم های برنده اسکار سال ۲۰۲۰. در میان صدها فیلم نامزد جایزه اسکار در بخش فیلم های خارجی فیلم "انگل" برنده این بخش شد.</p>                    
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/story.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اخبار جنجالی فیلم نیمروز</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "ماجرای نیمروز" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/moon.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اکران مردمی فیلم شبی که ماه کامل شد</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "شبی که ماه کامل شد" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                    
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/world.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">دانستنی های جذاب دنیای سینما</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                   <p>نگاهی به فیلم های خارجی و مشاهده ی فیلم های برنده اسکار سال ۲۰۲۰. در میان صدها فیلم نامزد جایزه اسکار در بخش فیلم های خارجی فیلم "انگل" برنده این بخش شد.</p>                    
                </div>
               
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/story.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اخبار جنجالی فیلم نیمروز</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "ماجرای نیمروز" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/moon.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">اکران مردمی فیلم شبی که ماه کامل شد</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                    <p>فیلم "شبی که ماه کامل شد" امروز در سالن اصلی سینما آزادی تهران اکران شد و اخبار جالبی را برای خود رقم زد. بازیگران اصلی این فیلم نیز امروز در سینما آزادی حضور داشتند.</p>
                    
                </div>
                
            </div>
        </div>

        <!-- Single Blog Area -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-blog-area " data-wow-delay="300ms">
                <!-- Single blog Thumb -->
                <div class="single-blog-thumb">
                    <img src="{{asset('assets/img/news/world.jpg')}}" alt="">
                </div>
                <div class="single-blog-text text-center">
                    <a class="blog-title" href="#">دانستنی های جذاب دنیای سینما</a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> گیتا مهرورز</a>
                        <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>۴ فروردین ماه سال ۱۳۹۹</a>
                    </div>
                   <p>نگاهی به فیلم های خارجی و مشاهده ی فیلم های برنده اسکار سال ۲۰۲۰. در میان صدها فیلم نامزد جایزه اسکار در بخش فیلم های خارجی فیلم "انگل" برنده این بخش شد.</p>                    
                </div>
               
            </div>
        </div>
         

           
            



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