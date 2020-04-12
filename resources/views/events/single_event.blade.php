@extends('layouts.confer.sitemaster')

@section('content')
<!-- Single Event Area Start -->
<section class="our-speaker-area section-padding-100">
    <div class="container">
        <!-- ==== Poster Area ====== -->
        <div class="row mt-5">
            <!-- Single image Area -->
            <div class="col-11 mfaded d-flex ">
                <div class="col-12 col-sm-6 col-lg-4 mt-4 ">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- event image -->
                        <div class="speaker-single-thumb">
                            <img src="../assets/img/feature-movies/{{$event->fileimage}}" alt="" style="height: 280px;width:100%;">
                        </div>


                    </div>
                </div>
                <div style="margin-top: 30px; margin-right: 40px;">
                    <div align="right">
                        <p class="mpoint">امتیاز : X</p>
                        <a href="">
                            <span class="fa fa-star mchecked"></span>

                        </a>
                        <a href="">
                            <span class="fa fa-star mchecked"></span>

                        </a>
                        <a href="">
                            <span class="fa fa-star mchecked"></span>

                        </a>
                        <a href="">
                            <span class="fa fa-star"></span>

                        </a>
                        <a href="">
                            <span class="fa fa-star"></span>

                        </a>
                    </div>
                <p class="mfilmname mt-1" dir="rtl" align="right">{{$event->title}}</p>
                <p class="mfilmdirector" dir="rtl" align="right">کارگردان: {{$event->director}}</p>
                    <div class="more-speaker-btn text-center mt-20  fadeInUp" data-wow-delay="300ms">
                        <a href="#msans" style="color: white;"><button class="btn  mbuy" style="font-size: 18px;">
                                <i class="zmdi zmdi-shopping-cart"
                                    style="margin-left:10px;font-size: 15px;color: white;"></i>خرید
                                بلیط</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== End of Poster Area ==== -->
        <!--====== About & Images ===== -->
        <div class="row mt-3 d-flex ">
            <!-- about event -->
            <div class="col-4 border shadow" style="height: 300px;">
                <p style="font-size: 24px;" dir="rtl" align="right"><i class="zmdi zmdi-triangle-down"
                        style="margin-left: 7px;color:#df42b1;"></i>درباره رویداد</p>
                        {{$event->description}}
            </div>
        <div class="col-1"></div>
            <!-- event images -->
            <div class="col-6 border shadow ">
                <p style="font-size: 24px" dir="rtl" align="right"><i class="zmdi zmdi-triangle-down"
                        style="margin-left: 7px;color:#df42b1;"></i>تصاویر</p>
                <div class="d-flex col-12 mb-3">
                    @foreach ($event->Photo->take(3) as $photo)
                    <div class="col-4 " style="height:200px;">
                       
                        <img src="../assets/img/feature-movies/{{$photo->path}}" alt="" class="border shadow" style="width:100%;height:100%">
                    </div> 
                    @endforeach
                    
    
                </div>
            </div>
        </div>
        <!-- ==== End of about & images -->



        <!--===== Shows =======  -->
        <div class="col-12 ">
            <p id="mshows" style="font-size: 24px" dir="rtl" align="center">سانس ها و سالن ها</p>
            <div class="more-speaker-btn text-center mt-20 py-5 " data-wow-delay="300ms">
                <button class="btn confer-btn mcinemas col-5 " style="font-size: 24px;" data-toggle="collapse"
                    data-target="#mshow"> <i class="zmdi  zmdi-camera-roll" style="margin-left:15px;"></i>سینما
                    آزادی </button>
            </div>
            
            <div id="mshow" class="collapse mshows">
                <div class=" single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center  fadeInUp "
                    data-wow-delay="300ms">
                    <!-- Single Show -->
                    <div class=" schedule-time-place mb-3">
                        <p dir="rtl" align="right"><i class="zmdi zmdi-calendar" style="margin-left: 5px;"></i> سه
                            شنبه</p>
                        <p dir="rtl" align="right"><i class="zmdi zmdi-time" style="margin-left: 5px;"></i> ساعت 17
                            - سالن 1</p>
                        <div class="d-flex justify-content-end">
                            <div>
                            <a href="{{route('seat_section')}}" class="px-3" style="color: white;">
                                    <button class="px-3 py-1 ml-4"
                                        style="border-radius: 23px;background-color: rgb(57,132,60);color: white;border: none;">
                                        نمایش سالن
                                    </button>
                                </a>
                            </div>
                            <div>
                            <a href="{{route('section_select')}}" class="px-2" >
                                    <button class="px-2 py-1 " style="border-radius: 23px;">
                                        انتخاب</button>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- Single Show -->
                    <div class=" schedule-time-place">
                        <p dir="rtl" align="right"><i class="zmdi zmdi-calendar" style="margin-left: 5px;"></i>
                            چهارشنبه</p>
                        <p dir="rtl" align="right"><i class="zmdi zmdi-time" style="margin-left: 5px;"></i> ساعت
                            19:30 - سالن 2</p>
                        <div class="d-flex justify-content-end">
                            <div>
                                <a href="#" class="px-2" style="color: white;">
                                    <button class="px-3 py-1 ml-4"
                                        style="border-radius: 23px;background-color: rgb(57,132,60);color: white;border: none;">
                                         نمایش سالن
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="px-2">
                                    <button class="px-2 py-1  " style="border-radius: 23px;">
                                        انتخاب
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== End of Shows -->


        <!-- ==== Related Event ===== -->
        <br><br>
        <div id="demos" class="col-11 border shadow mt-5 mb-5" style="height: 430px;">
            <p style="font-size: 24px;" class="text-center my-4">رویدادهای مرتبط</p>

            <div class="row mb-5" style="height: 330px;">
                <!-- <div class="col-lg-12 "> -->
                <div class="owl-carousel owl-theme  mslider col-12 "
                    style="display:block !important;height: 300px;">
                    <!-- ===each slide  -->
                    <div class="item">

                        <a href="#"><img src="{{asset('assets/img/feature-movies/African Violet.jpg')}}" alt="" style="height: 190px;"></a>
                        <div class="text-center py-3">

                            <p style="color: black;">نام رویداد</p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{asset('assets/img/feature-movies/Pig _ poster by Erfan Behkar.jpg')}}" alt="" style="height: 190px;"></a>
                        <div class="text-center py-3">

                            <p style="color: black;">نام رویداد</p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{asset('assets/img/feature-movies/Poster by Mohammad Hossein Houshmandi.jpg')}}" alt="" style="height: 190px;"></a>
                        <div class="text-center py-3">

                            <p style="color: black;">نام رویداد</p>
                        </div>
                    </div>
                    <div class="item">

                        <a href="#"><img src="{{asset('assets/img/feature-movies/jahan.jpg')}}" alt="" style="height: 190px;">
                        </a>
                        <div class="text-center py-3">

                            <p style="color: black;">نام رویداد</p>
                        </div>
                    </div>



                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- === End of related events -->



        <!-- === Comments ==== -->
        <div class="col-11 mt-5 border mcomment">
            <p align="right" style="font-size: 24px;margin-top: 20px;"><i class="zmdi zmdi-comment-text"
                    style="margin-left: 7px;color:#df42b1;"></i>نظرات کاربران</p>
            <!-- Single comment -->
            <div class="d-flex col-12 border shadow mb-2">
                <div class="col-1 pt-3">
                    <img src="{{asset('assets/img/mimg/unknownuser2.png')}}" alt="">
                </div>
                <div class="mr-2 my-2">
                    <p align="right"><b>نام کاربر</b></p>
                    <p align="right">نظر کاربر</p>
                </div>
            </div>
            <!-- insert new comment -->
            <div class="mt-5">
                <p align="right">نظر خود را وارد کنید.</p>
                <form action="#" method="post" align="right">
                    <div class=" col-8 ">
                        <input type="text" class="form-control py-1" name="name" placeholder="نام و نام خانوادگی">
                    </div>
                    <br>
                    <div class="col-8">
                        <textarea class="form-control" rows="5" cols="3" name="comment"
                            placeholder="نظر شما"></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="col-8">
                        <input type="submit" value="ارسال" class="px-3 py-2 msend">
                    </div>
                    <br>
                </form>
            </div>
        </div>

        <!-- End of Comments -->




    </div>
</section>
@endsection
