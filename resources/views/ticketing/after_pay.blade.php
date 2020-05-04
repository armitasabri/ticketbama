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
        
        <div class="row my-5 text-center">
           
            <div class="col-11 border shadow pt-4 ">
           
            
                
                    <p align="right"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>با تشکر از خرید شما، اطلاعات خرید شما به شرح زیر است:.</p>
                   
                    <br><br>
                    <p align="right"><i class="zmdi zmdi-triangle-down"
                    style="margin-left: 7px;color:#df42b1;"></i>شماره پیگیری خرید:{{$refID}}</p>
                    <br><br><br>
                    <p align="right"><i class="zmdi zmdi-triangle-down"
                        style="margin-left: 7px;color:#df42b1;"></i>شماره سفارش:{{$order_id}}</p>
                    <br><br><br>
                    <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
                        <a href="{{route('seats',['id'=>$hall_sanse,'section'=>$section_name,'price'=>$price,'order_id'=>$order_id])}}"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;" >
                              انتخاب صندلی</button></a>
                    </div>
                    <br><br><br>

               

            </div>
        



        </div>
        <!-- ==== End of section_Select Area ==== -->


    </div>
</section>
@endsection
