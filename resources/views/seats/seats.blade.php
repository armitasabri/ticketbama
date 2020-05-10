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
                        <img src="{{asset("assets/img/feature-movies/".$hs->event->fileimage)}}" alt="" style="height: 280px;width:100%;">
                        </div>


                    </div>
                </div>
                <div style="margin-top: 60px; margin-right: 40px;">

                <p class="mfilmname mt-2" dir="rtl" align="right">{{$hs->event->title}}</p>
                <p align="right" class="secsalonname">{{$hs->sanse->name}} - ساعت: {{$hs->sanse->sanse_start}}</p>
                <p align="right" class="secsalonname">{{$hs->hall->venue->venue_name}}  - {{$hs->hall->name}}</p>

                </div>

            </div>
        </div>
        <!-- ==== End of Poster Area ==== -->
        <!-- === Section image Area -->
        {{-- <div class="row my-5 text-center">
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



        </div> --}}
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
                <div class="text-center pt-5 pr-5 pl-2" style="min-height:700px;min-width:800px;">
                
                  @if(isset($message))
                    {{$message}}
                  @else
                      
                    @foreach ($myallseats as  $seat) 
                  
                     <span style="display:none">  {{$color="none"}}</span> 
                    
                    @if($seat->status_id === 2 )
                    <span style="display:none;">  {{$color="red"}}</span>
                    @else
                   <span style="display:none;">{{$color='none'}}</span>
                
                  
                    @endif
                   
               
                    @if ($seat->seat->forward== "yes")
                <div id="{{$seat->id}}" class="col seats target forward p-0">
                    
                        <span data-toggle="tooltip" title="ردیف: {{$seat->seat->seat_row}} صندلی: {{$seat->seat->seat_col}} وضعیت: {{$seat->status->name}}" class="icon-chairr" style="font-size:300%;color:{{$color}}"></span>
                    
                      
                      <span style="display:none;">
                        {{$seat->seat->id}}
                      </span>
                     
                       
                    
                      
                      </div> 
                     @elseif($seat->seat->empty== "yes" ) 
                        <div  id="{{$seat->id}}" class="col seats target empty p-0">
                      
                    
                    
                          <span data-toggle="tooltip" title="ردیف: {{$seat->seat->seat_row}} صندلی: {{$seat->seat->seat_col}} وضعیت: {{$seat->status->name}}" class="icon-chairr" style="font-size:300%;color:{{$color}};display:none"></span>
                       
                     
                      <span style="display:none">
                        {{$seat->seat->id}}
                      </span>
                      </div>   
                     @else
                  
                       <div id="{{$seat->id}}" class="col seats target p-0">
                   
                   
                   
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
        <!-- === Buy Area === -->
        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
            <a href="{{route('section_select',['id'=>$hs->id])}}"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;" >
                  خرید بلیط</button></a>
        </div>
        <!-- ==== End of Buy Area =====-->

        <!-- === final ==== -->
        @guest
        
        @else 
        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
        <button id="final_select" class="btn  mbuy px-3 py-2" style="font-size: 22px;" href="#mshows">
                    نهایی کردن خرید</button>
        </div>

        <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
          <a href="{{route('user_ticket',['order_id'=>$oid])}}">  <button  class="btn  mbuy px-3 py-2" style="font-size: 22px;" href="#mshows">
                        مشاهده بلیط</button></a>
            </div>

            {{-- <div class="more-speaker-btn text-center mt-20  fadeInUp " data-wow-delay="300ms">
                <a href="{{route('final_ticket',['id'=>$hs->id])}}"><button class="btn  mbuy px-3 py-2" style="font-size: 22px;" >
                      مشاهده بلیط</button></a>
            </div> --}}
        @endguest
        

    </div>
</section>










<script>
    

$(document).ready(function(){



$('[data-toggle="tooltip"]').tooltip();


var columns = {!! json_encode($columns) !!};
var rows = {!! json_encode($rows) !!};
console.log(rows);

var tedad ={!! json_encode($tedad_bilit) !!};

console.log(columns);



var divs = $(".target");

    for(var i = 0; i < divs.length; i+=columns) {
       
             divs.slice(i, i+columns).wrapAll("<div class='row'>ردیف</div>");
  
    }
    // for( var j=1 ; j<= rows;j++){
    //    $('.row').slice(j, j+rows).append(j); 
    // }


  // 4 saniye negah midare class reservo
//  $('.target').click(function(){
     
//      $(this).toggleClass( "reserved" ).delay(4000).queue(function(){
//         $(this).removeClass("reserved").dequeue(); 
//      });
//  })

 $('.target').click(function(e){
     
    
     
if ($('.reserved').length < tedad) {


 $(this).toggleClass( "reserved" ); 
    

e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


    var items = $('.reserved').map(function () { return this.id; }).get();
     
console.log(items);    
    
$.ajax({
  url: "/seat_reserved",
  dataType: 'json',
  type: "post",
  data: {
    ids: items,
    
  },
  success: function(response, status) {
     alert("صندلی/صندلی های انتخابی شما با موفقیت رزرو شد");
  },
  // error: function(XMLHttpRequest, textStatus, erroeThrown) {
  //   console.log('AJAX error:' + textStatus)
  // }
});
} else {
      alert("شما  می‌توانید" +tedad+ "صندلی انتخاب نمایید");
      
    }

 
});




$('#final_select').click(function(e) {

    e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


    var items = $('.reserved').map(function () { return this.id; }).get();
     
console.log(items);

     
    
$.ajax({
  url: "/seat_sold",
  dataType: 'json',
  type: "post",
  data: {
    ids: items,
    
  },
  success: function(response, status) {
     alert("صندلی/صندلی های انتخابی شما با موفقیت رزرو شد");
  },
  // error: function(XMLHttpRequest, textStatus, erroeThrown) {
  //   console.log('AJAX error:' + textStatus)
  // }
});


});

  
    


      
    



});







</script>
@endsection
