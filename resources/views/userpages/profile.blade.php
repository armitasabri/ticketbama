@extends('layouts.confer.regular')
@section('content')
<div class="background2">
    <div class="container pr-5" style="padding-top:90px;">
        <div class="d-flex justify-content-center h-100">
            <div class="card " style="height: 500px; width: 500px;">
                <div class="card-header">
                    <h3 style="direction: rtl; text-align: right; display: inline-block;">   پروفایل شما </h3>
                    <div class="col-3 pt-3 float-left ">
                        <img src="{{asset('assets/img/mimg/22.jpg')}}"  class="rounded-circle">
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                       <h6><span class="text-success">  {{ Auth::user()->name }}  </span>  <span class="text-white">  عزیز</span></h6> 
                      <h6 style="direction: rtl; text-align: right; color:rgb(254,254,94); display: inline-block;"> به پروفایل خود خوش آمدید!</h6>
                        <div class="pt-20 text-light hovericon " style="padding-top:6vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"><i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;مشاهده خرید‌ها</a> </div>
                        <div class="pt-20 text-light hovericon " style="padding-top:3vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;برگشت به صفحه اصلی</a> </div>
                        <div class="pt-20 text-light hovericon  " style="padding-top:3vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;تغییر مشخصات کاربری </a> </div>
                        <div class="pt-20 text-light hovericon " style="padding-top:3vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"> <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; لیست علاقه‌مندی‌ها </a> </div>
                        <div class="pt-20 text-light hovericon  " style="padding-top:3vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> &nbsp; نظر من </a> </div>
                        <div class="pt-20 text-light hovericon " style="padding-top:3vh;direction: rtl; text-align: right;"> <a class="text-light" style="color:black" href="#"><i class="fa fa-bell" aria-hidden="true"></i> &nbsp;  اطلاع رسانی‌ها </a> </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
</div>

@endsection
