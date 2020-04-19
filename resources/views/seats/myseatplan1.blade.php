@extends('layouts.confer.sitemaster')


@section('content')

<div class="container-fluid  pt-5" style="height:500px;">
  
        <div class="row d-flex ">
            <div class="col d-flex justify-content-center" style="padding-top:280px;">
                @foreach ($seats as $seat)
                @if ($seat->status_id==3)
            <div class="target " id="{{$seat->seat_no}}"  value="#m{{$seat->seat_no}}" >
                        <img src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:100px;width:100px">
                       <span style="display:none">{{$seat->seat_no}}</span> 
                    </div>
                @elseif($seat->status_id==1)
                <div class="target selected" id="{{$seat->seat_no}}" value="#m{{$seat->seat_no}}" >
                    <span style="display:none">{{$seat->seat_no}}</span> 
                    <img src="{{asset('assets/img/seats/seat1.png')}}" alt="" style="height:100px;width:100px">

                </div>
               

            @endif
                @endforeach
               
            </div>
           <div class="col" style="padding-top:280px;"> 
          <button id="button" class="btn confer-btn" value=reserve>reserve</button>
         </div>
        </div>
       
   
</div>



<script>

  
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

// var a = [$(".reserved").attr('id')];

// $(".reserved").filter("[id]").each(function() { 
//     // alert((this.id).get(0))
//     a=[this.id];
//     alert(a) });

    var items = $('.reserved').map(function () { return $(this).text(); }).get();
// var selectAllClass= document.getElementsByClassName("reserved");
//   var    d=document.querySelectorAll(`[class*="reserved"]`);       
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

// $.ajax({
//   url: "/seat_reserved",
//   dataType: 'json',
//   type: "get",
//   data: "",
//   success: function(response, status) {
//     alert()
//   },
//   // error: function(XMLHttpRequest, textStatus, erroeThrown) {
//   //   console.log('AJAX error:' + textStatus)
//   // }
// });

});

  
    


// jQuery(document).ready(function(){
//             jQuery('#ajaxSubmit').click(function(e){
//                e.preventDefault();
//                $.ajaxSetup({
//                   headers: {
//                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//                   }
//               });
      
//               $('#button').click(function() {
//                 var a = $(".reserved").val();
//                 console.log(a);
//                jQuery.ajax({
//                   url: "{{ url('/seat_reserved') }}",
//                   method: 'post',
//                   data: {
//                      name: a,
                    
//                   },
//                   success: function(result){
//                      console.log(result);
//                   }});
//                 });
//                });
//             });
 
      
    


    
</script>



@endsection