@extends('layouts.confer.sitemaster')

@section('content')

<div class="container" style="min-height:800px;padding-top:30vh;padding-right:20vw">
    @for ($i=0;$i<$rows;$i++)
<div id="{{$i}}" class="row ">
          @for ($j=0;$j<$cols;$j++)
      <div id="{{$j}}" class="col-2 seats">
      {{$i}} {{$j}}<img class="" src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:50px;width:50px">
       </div>
                
          @endfor
        </div> 
      
 @endfor

 <div class="pt-4 pb-2">
     <button id="deletebutton" >حذف صندلی</button>
 </div>
 <div>
     <button id="movebutton">جلو بردن صندلی</button>
 </div>

 <div>
    <button id="calculate">محاسبه</button>
</div>
 </div>

     

<script>
//      $('.seats').click(function(){
//      $(this).toggleClass( "reserved" )
//  })
 $('.seats').click(function(){
     $(this).addClass( "selected" )
 })

 $('#deletebutton').click(function(e) {

e.preventDefault();
$(this).addClass( "empty" )
$(".selected").addClass('')empty();


 });

 $('#movebutton').click(function(e) {

e.preventDefault();
$(".reserved").addClass('forward');


 });

 $('#calculate').click(function(e) {



var selectAllClass= document.getElementsByClassName("forward");
console.log(selectAllClass);
 });



</script>




@endsection