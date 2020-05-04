@extends('layouts.admin-dashboard.master')

@section('content')

<div class="container" style="min-height:800px;padding-top:30vh;padding-right:20vw">
 

    @foreach($all as $seat) 
    <div id="{{$seat->id}}" class="col seats" style="padding-right:5px;" >
        <img class="" src="{{asset('assets/img/seats/seat.png')}}" alt="" style="height:50px;width:50px">
      </div>
   
 @endforeach
<div class="pt-4 ">
     <button id="movebutton" class="btn btn-warning">جلو بردن صندلی</button>
 </div>

 <div class="pt-4 pb-2" >
     <button class=" btn btn-danger" id="deletebutton" >حذف صندلی</button>
 </div>
 
 <div class="pt-4 pb-2">
    <button id="calculate" class="btn btn-success">ذخیره در دیتابیس</button>
</div>

 </div>

     

<script>



var columns = {!! json_encode($columns) !!};

 

console.log(columns);


// var divs = $("div > div");
var divs = $(".seats");

    for(var i = 0; i < divs.length; i+=columns) {
      divs.slice(i, i+columns).wrapAll("<div class='row'></div>");
    }


 $('.seats').dblclick(function(){
     $(this).toggleClass( "selected" )
 })

 $('.seats').click(function(){
     $(this).toggleClass( "reserved" )
 })


 $('#deletebutton').click(function(e) {

e.preventDefault();
$(".selected").addClass( "empty" )
$(".empty").empty();


 });

 $('#movebutton').click(function(e) {

e.preventDefault();
$(".reserved").addClass("forward");


 });

 $('#calculate').click(function(e) {
    e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

    var forwarded = $('.forward').map(function () { return this.id; }).get();
    var deleted = $('.empty').map(function () { return this.id; }).get();

// var selectAllClass= document.getElementsByClassName("forward");
console.log(deleted);


$.ajax({
  url: '{{route('admin_seat_plan')}}',
  dataType: 'json',
  type: "post",
  data: {
    deletes: deleted,
    forwards: forwarded
    
  },
  success: function(response, status) {
     alert("پلن انتخابی شما با موفقیت ذخیره شد");
  },
  // error: function(XMLHttpRequest, textStatus, erroeThrown) {
  //   console.log('AJAX error:' + textStatus)
  // }
});
 });



</script>




@endsection