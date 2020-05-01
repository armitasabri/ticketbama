@extends('layouts.confer.sitemaster')


@section('content')

<div class="container" style="min-height:800px;padding-top:30vh;padding-right:20vw">

 @foreach ($allseats as  $seat)  
 
    @if ($seat->forward== "yes")
    <div id="{{$seat->id}}" class=" seats target forward">
      <img  src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:50px;width:50px"><span style="display:none">
        {{$seat->id}}
      </span>
      </div> 
     @elseif($seat->empty== "yes") 
     <div  id="{{$seat->id}}" class=" seats target empty">
      <img style="display:none" src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:50px;width:50px">
      <span style="display:none">
        {{$seat->id}}
      </span>
      </div>   
     @else
  
  <div id="{{$seat->id}}" class=" seats target ">
   <img  src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:50px;width:50px">
   <span style="display:none">
    {{$seat->id}}
  </span>
   </div>   
      @endif  
        
    

 @endforeach 
 
 <div class="col" style="padding-top:280px;"> 
  <button id="button" class="btn confer-btn" value=reserve>reserve</button>
 </div>
</div>  






<script>

var columns = {!! json_encode($columns) !!};

 

console.log(columns);


// var divs = $("div > div");
var divs = $(".target");

    for(var i = 0; i < divs.length; i+=columns) {
      divs.slice(i, i+columns).wrapAll("<div class='row'></div>");
    }


  
 $('.target').click(function(){
     $(this).toggleClass( "reserved" )
 })

$('#button').click(function(e) {

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


});

  
    


      
    


    
</script>



@endsection