@extends('layouts.admin-dashboard.master')

@section('content')

<div class="container" style="min-height:800px;padding-top:5vh;">
<div class="row ">
   {{-- <form action="{{route('admin_seat')}}" method="POST">
@csrf
تعداد صندلی در هر ردیف<input type="text" placeholder="چند ستون" name="vertical" >
تعداد سطر<input type="text" placeholder="چند سطر " name="horizontal">
<input type="submit" value="submit">

</form>  --}}

<div class="col-12 " >
      <div class="card" >
         <div class="card-header d-flex align-items-center">
         <h4 style="color:#33B35A">انتخاب تعداد صندلی و مشخصات سالن</h4>
         </div>
         <div class="card-body">
         <p>در اینجا می‌توانید تعداد صندلی های هر ستون و ردیف را مشخص نمایید.</p>
         <form class="form-horizontal" action="{{route('admin_insert_seat')}}" method="POST">
            @csrf
            <div class="form-group row">
               <div class="col-sm-2"> 
               <label>تعداد ردیف</label>
               </div>
               <div class="col-sm-10">
               <input id="inputHorizontalSuccess" name="horizontal" type="text" placeholder="seat columns" class="form-control form-control-success"><small class="form-text">برای مثال 5 ردیف.</small>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-2"> 
               <label>تعداد صندلی‌ها در هر ردیف</label>
               </div>
               <div class="col-sm-10">
               <input id="inputHorizontalWarning" name="vertical" type="text" placeholder="seat rows" class="form-control form-control-warning"><small class="form-text">برای مثال 10 صندلی در هر ردیف.</small>
               </div>
            </div>
<hr>
         
                  <label >نام سینما را انتخاب نمایید.</label>
                  <select   name="venue" id="venue_id" class="form-control venues" >
                     <option value="0" disabled="true" selected="true" >انتخاب سینما</option>
                     @foreach ($venues as $venue)
                     <option value="{{$venue->id}}">{{$venue->venue_name}}</option>
                     @endforeach
                  </select>
             

                  <label style="padding-top:10px;">نام سالن را انتخاب نمایید.</label>
                  <select name="hall" id="hall_id" class="halls  form-control" >
                     <option value="0"  disabled="true" selected="true">انتخاب سالن</option>
                
                  </select>
            
         
                  <label style="padding-top:10px;">نام جایگاه را انتخاب نمایید.</label>
                  <select name="seatsection" id="seatsection_id" class="form-control seatsections">
                     <option value="0" disabled="true" selected="true">انتخاب جایگاه</option>
                  </select>
            
               <input style="margin-top:15px;" type="submit" value="ارسال" class="btn btn-primary">
             


         </form>
         </div>
      </div>
</div>



</div>
</div>



<script>
$(document).ready(function(){

   $(document).on('change','.venues',function(){
           
           var venue_id=$(this).val();
          var div=$(this).parent();
          var op=" ";
          $.ajax({
             type:'get',
             url:'{{route('admin_find_venue_halls')}}',
             data:{'id':venue_id},
             success:function(data){
               // console.log('success');
               // console.log(data);

               op+='<option value="0" selected disabled > سالن</option>';
                for(var i=0;i<data.length;i++){
                   op+='<option value="'+data[i].id+'">'+data[i].name+ '</option>';
                }
                    
                var a=div.find(".halls").html(" ");
                console.log(a);
                div.find(".halls").append(op);
             },
             error:function(){

             }
          });

   });

                $(document).on('change','.halls',function(){
                      
                  var hall_id=$(this).val();
                  var div=$(this).parent();

                  var op=" ";

                  $.ajax({
             type:'get',
             url:'{{route('admin_find_hall_seatsections')}}',
             data:{'id':hall_id},
             success:function(data){
               // console.log('success');
               // console.log(data);

               op+='<option value="0" selected disabled > جایگاه</option>';
                for(var i=0;i<data.length;i++){
                   op+='<option value="'+data[i].id+'">'+data[i].name+ '</option>';
                }
                    
                var a=div.find(".seatsections").html(" ");
                console.log(a);
                div.find(".seatsections").append(op);
             },
             error:function(){

             }
          });
                });



});

</script>

@endsection