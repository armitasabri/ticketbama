@extends('layouts.confer.sitemaster')

@section('content')
<!-- Main Area Start -->
<section class="our-speaker-area section-padding-100">
    <div class="container">

        <!-- === Final Ticket Area -->
        <div class="row my-5 text-center">

            <div class="col-11 border shadow pt-4">
               @foreach ($my_tickets as $ticket)
                   <div class="col-12  pt-4 ">
                   <p align="right">نام رویداد:{{$ticket->order->event->title}}</p>
                   <p align="right">سانس: {{$ticket->order->sanse->name}} ، ساعت:{{$ticket->order->sanse->sanse_start}}</p>
                   <p align="right">تاریخ: {{$ticket->order->sanse->sansdate}}</p>
                   <p align="right">مکان:{{$ticket->seat->venue->venue_name}}</p>
                    <p align="right">جایگاه:{{$ticket->order->seatsection->name}} </p>

                   <p align="right">ردیف: {{$ticket->seat->seat_row}} صندلی:{{$ticket->seat->seat_col}}</p>

                   <hr>

                </div> 
               @endforeach
               
                <div><b>
                        <hr></b></div>
            

            </div>



        </div>
        <!-- ==== End of Final Ticket Area ==== -->


    </div>
</section>


@endsection
