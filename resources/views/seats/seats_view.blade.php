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
                        <img src="../../assets/img/feature-movies/{{$hs->event->fileimage}}" alt="" style="height: 280px;width:100%;">
                        </div>


                    </div>
                </div>
                <div style="margin-top: 60px; margin-right: 40px;">

                <p class="mfilmname mt-2" dir="rtl" align="right">{{$hs->event->title}}</p>
                <p align="right" class="secsalonname">{{$hs->sanse->name}}</p>
                <p align="right" class="secsalonname">{{$hs->hall->venue->venue_name}}  - {{$hs->hall->name}}</p>

                </div>

            </div>
        </div>
        

        
        <div class="row  mb-4 py-4">
            <div class="border shadow  col-11">
                <div>
                    <p align="right" class="pt-3" style="font-size:18px;"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>
                        نمای صندلی ها</p>
                        <p align="right" class="pt-3" style="font-size:18px;"><i class="zmdi zmdi-triangle-down"
                            style="margin-left: 7px;color:#df42b1;"></i>
                        این پلان صرفا جهت نمایش است.انتخاب صندلی تنها پس از پرداخت میسر است.</p>
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
                <div class="text-center pt-5 pr-2 pl-2" style="min-height:700px;min-width:800px;">
                    
                  @if(isset($message))
                    {{$message}}
                    @else


                    @foreach ($myallseats as  $seat) 

                     <span style="display:none">  {{$color="none"}}</span> 
                   
                    @if($seat->status_id ===2 )
                    <span style="display:none;">  {{$color="red"}}</span>
                    @else
                   <span style="display:none;">{{$color='none'}}</span>
                
                  
                    @endif
                   
                   
                    @if ($seat->seat->forward== "yes")
                <div  id="{{$seat->id}}" class="col seats target forward p-0">
                      {{-- <img  src="{{asset('assets/img/seats/seat.png')}}" alt="" style="height:50px;width:50px;background-color:{{$color}}"> --}}
                     
                <span data-toggle="tooltip" title="ردیف: {{$seat->seat->seat_row}} صندلی: {{$seat->seat->seat_col}} وضعیت: {{$seat->status->name}}" class="icon-chairr" style="font-size:300%;color:{{$color}}"></span>
                    
                      
                      <span style="display:none;">
                        {{$seat->seat->id}}
                      </span>
                     
                        {{-- <i style="display-inline" class="flaticon-chair" ></i>   --}}
                    
                      
                      </div> 
                     @elseif($seat->seat->empty== "yes" ) 
                     <div   id="{{$seat->id}}" class="col seats target empty p-0">
                      {{-- <img style="display:none;" src="{{asset('assets/img/seats/seat.png')}}" alt="" style="height:50px;width:50px;background-color:{{$color}}"> --}}
                    
                      
                          <span data-toggle="tooltip" title="ردیف: {{$seat->seat->seat_row}} صندلی: {{$seat->seat->seat_col}} وضعیت: {{$seat->status->name}}" class="icon-chairr" style="font-size:300%;color:{{$color}};display:none"></span>
                       
                     
                      <span style="display:none">
                        {{$seat->seat->id}}
                      </span>
                      </div>   
                     @else
                  
                  <div  id="{{$seat->id}}" class="col seats target p-0">
                   {{-- <img  src="{{asset('assets/img/seats/seat.png')}}" alt="" style="height:50px;width:50px;background-color:{{$color}}"> --}}
                
                   
                        <span data-toggle="tooltip" title="ردیف: {{$seat->seat->seat_row}} صندلی: {{$seat->seat->seat_col}} وضعیت: {{$seat->status->name}}" class="icon-chairr" style="font-size:300%;color:{{$color}}"></span>
                   
               
                  
                   <span style="display:none">
                    {{$seat->seat->id}}
                  </span>
                   </div>   
                      @endif  
                        
                    
                
                 @endforeach 
               
            <div class="row d-flex justify-content-center align-items-center  pb-3">
                                <div class="text-center">
                                    <img src="{{asset('assets/img/seats/event.png')}}" alt="" style="height:200px;width:500px">
                                </div>
                                
                            </div>
@endif
                </div>

                
            </div>
        </div>
        
     
        

    </div>
</section>










<script>
   $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();


var columns = {!! json_encode($columns) !!};


console.log(columns);



var divs = $(".target");

    for(var i = 0; i < divs.length; i+=columns) {
      divs.slice(i, i+columns).wrapAll("<div class='row'></div>");
    }




});



</script>
@endsection
