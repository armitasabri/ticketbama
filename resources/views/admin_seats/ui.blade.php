@extends('layouts.confer.sitemaster')

@section('content')

<div class="container" style="min-height:800px;padding-top:30vh;padding-right:20vw">
    @for ($i=1;$i<=$rows;$i++)
<div id="{{$i}}" class="row ">
          @for ($j=1;$j<=$cols;$j++)
      <div id="{{$i}}{{$j}}" class="col seats">
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
    <button id="calculate">ذخیره در دیتابیس</button>
</div>
 </div>

     

<script>
//      $('.seats').click(function(){
//      $(this).toggleClass( "reserved" )
//  })
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
  url: "/created_plan",
  dataType: 'json',
  type: "post",
  data: {
    deletes: deleted,
    forwards: forwarded
    
  },
  success: function(response, status) {
    //  alert("پنل انتخابی شما با موفقیت ذخیره شد");
  },
  // error: function(XMLHttpRequest, textStatus, erroeThrown) {
  //   console.log('AJAX error:' + textStatus)
  // }
});
 });



</script>




@endsection