@extends('layouts.confer.sitemaster')

@section('content')
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {

   opacity: 1;

}
</style>
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

                            <img src="../assets/img/feature-movies/{{$hall_sanse->Event->fileimage}}" alt="" style="height: 280px;width:100%;">
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
        <!-- === Section_Select Area -->
        <div class="row my-5 text-center">
           
            <div class="col-11 border shadow pt-4 ">
            @guest
             <p>لطفا ابتدا با حساب کاربری خود وارد شوید.</p>
            @else
            <form action="{{route('prepay_ticket',['id'=>$hall_sanse->id])}}" method="get" align="right">
                {{ csrf_field() }}
                    <p align="right"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>لطفا جایگاه مورد نظر خود را انتخاب کنید.</p>
                    <select name="jaygah" id="" class="p-2 mr-5  schedule-time-place">
                        <option value="seatsection1">جایگاه 1</option>
                        <option value="seatsection2">جایگاه 2</option>
                    </select>
                    <br><br>
                    <p align="right"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>تعداد بلیط :</p>
                    <input name="tedad" type="number" min="1" class="p-1 mr-5" value="1">
                    <br><br><br>
                    <input type="submit" value="ادامه خرید" class="px-3 py-2 msend mr-5">
                    <br><br><br>

                </form>

            </div>
            @endguest



        </div>
        <!-- ==== End of section_Select Area ==== -->


    </div>
</section>
@endsection
