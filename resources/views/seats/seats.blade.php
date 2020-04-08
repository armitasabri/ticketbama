@extends('layouts.confer.sitemaster')

@section('content')
<!-- Main Area Start -->
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
                            <img src="{{asset('assets/img/feature-movies/Macerated Nimrod _ poster by The 3X4.jpg')}}" alt="" style="height: 280px;width:100%;">
                        </div>


                    </div>
                </div>
                <div style="margin-top: 60px; margin-right: 40px;">

                    <p class="mfilmname mt-2" dir="rtl" align="right">نام رویداد</p>
                    <p align="right" class="secsalonname">سه شنبه - ساعت 17</p>
                    <p align="right" class="secsalonname">سینما آزادی - سالن 1</p>

                </div>

            </div>
        </div>
        <!-- ==== End of Poster Area ==== -->
        <!-- === Section image Area -->
        <div class="row my-5 text-center">
            <!-- <div class="col-11  "> -->

            <div class="col-11 border shadow pt-4 ">
                <div class="d-flex">
                    <div>
                        <p align="right" class="p7-3"><i class="zmdi zmdi-triangle-down"
                                style="margin-left: 7px;color:#df42b1;"></i>
                            با کلیک بر روی هر جایگاه صندلی های مربوط به آن نمایش داده می شود.</p>
                    </div>


                </div>

                <hr>

                <img src="{{asset('assets/img/mimg/seats/sections.png')}}" alt="" usemap="#secmap">

                <map name="secmap" id="secmap">
                    <area shape="poly" href="#"
                        coords="79,51,42,137,90,148,144,156,190,151,225,146,263,136,226,52,188,64,153,70,110,62">
                    <area shape="poly" href="#"
                        coords="39,149,21,209,74,218,141,225,197,222,246,217,286,208,267,151,212,161,163,167,121,165,76,157">
                </map>
            </div>



        </div>
        <!-- ==== End of section image Area ==== -->

        <!--  ==== Seats Area ====== -->
        <div class="row  mb-4 py-4">
            <div class="border shadow  col-11">
                <div>
                    <p align="right" class="pt-3" style="font-size:18px;"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>
                        نمای صندلی ها</p>
                </div>
                <hr>
                <div class="d-flex">
                    <span align="right" class="ghabelekharid"></span>
                    <p align="right" style="font-size: .9em;">قابل خرید</p>
                    <span align="right" class="forukhteh"></span>
                    <p align="right" style="font-size: .9em;">فروخته شده</p>
                    <span align="right" class="reserve"></span>
                    <p align="right" style="font-size: .9em;">رزرو شده</p>

                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/mimg/seats/seat2.png')}}" alt="">

                </div>
            </div>
        </div>
        <!-- === Buy Area === -->
        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
            <a href="{{route('section_select')}}"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;" >
                  خرید بلیط</button></a>
        </div>
        <!-- ==== End of Buy Area =====-->

        <!-- === final ==== -->
        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
        <a href="{{route('final_ticket')}}"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;" href="#mshows">
                    نهایی کردن خرید</button></a>
        </div>

    </div>
</section>
@endsection
