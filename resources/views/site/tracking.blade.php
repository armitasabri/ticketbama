@extends('layouts.confer.sitemaster')

@section('content')
 <!-- Main Area Start -->
 <section class="our-speaker-area section-padding-100">
    <div class="container">
        <div class="col-11 border shadow pt-4 mt-5">
        <form action="{{route('final_ticket')}}" method="get" align="right">
            {{ csrf_field() }}
                <p align="right"><i class="zmdi zmdi-triangle-down" style="margin-left: 7px;color:#df42b1;"></i>لطفا
                    شماره پیگیری را وارد کنید.</p>


                <input type="text" class="p-1 mr-5">
                <br><br><br>
                <input type="submit" value="مشاهده بلیط" class="px-3 py-2 msend mr-5">
                <br><br><br>

            </form>

        </div>


    </div>
</section>
@endsection
