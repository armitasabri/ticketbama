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

                            <img src="../../assets/img/feature-movies/{{$hall_sanse->Event->fileimage}}" alt="" style="height: 280px;width:100%;">

                        </div>


                    </div>
                </div>
                <div style="margin-top: 60px; margin-right: 40px;">

                <p class="mfilmname mt-2" dir="rtl" align="right">{{$hall_sanse->Event->title}}</p>
                    <p align="right" class="secsalonname">{{$hall_sanse->sanse->name}}</p>
                    <p align="right" class="secsalonname">{{$hall_sanse->hall->name}}</p>

                </div>

            </div>
        </div>
        <!-- ==== End of Poster Area ==== -->
        <!-- === Prepay Ticket Area -->
        <div class="row my-5 text-center">

            <div class="col-11 border shadow pt-4 ">
                <p align="right" style="font-size: 18px;"><i class="zmdi zmdi-triangle-down"
                        style="margin-left: 7px;color:#df42b1;"></i>جایگاه انتخابی شما : {{$selected_section}} </p>
                <div class="col-4">
                    <hr>
                </div>
                <br>
                <p align="right" style="font-size: 18px;"><i class="zmdi zmdi-triangle-down"
                style="margin-left: 7px;color:#df42b1;"></i>تعداد بلیط : {{$tedad}}</p>
                <div class="col-4">
                    <hr>
                </div>

                <br>
                <p align="right" style="font-size: 18px;"><i class="zmdi zmdi-triangle-down"
                style="margin-left: 7px;color:#df42b1;"></i>مبلغ نهایی : {{$total}} تومان</p>
                <div class="col-4">
                    <hr>
                </div>

                <br><br>
                <a href="{{route('final_ticket',['fee'=>$total,'hall_sanse'=>$hall_sanse->id,'place'=>$selected_section])}}" class="px-3" style="color: white;">
                <button  class="px-3 py-2 ml-4" 

                        style="border-radius: 23px;background-color: rgb(57,132,60);color: white;border: none;">
                        پرداخت
                    </button></a>
                <br><br><br>


            </div>



        </div>
        <!-- ==== End of Prepay Ticket Area ==== -->


    </div>
</section>

@endsection
