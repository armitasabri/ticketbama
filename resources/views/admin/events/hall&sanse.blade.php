@extends('layouts.admin-dashboard.master')


   

@section('content')



<div class="container pt-5" style="direction:ltr" >
<center><a href="{{route('admin_go_to_hallsanse')}}">
    <button style="border: green solid 5px" class="btn btn-primary">اضافه کردن سانس و سالن</button>
</a></center> 
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>hall</th>
        <th>sanse</th>
        <th>events  title</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($h_ss as $h_s )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$h_s->id}}</th>
             <td  >{{$h_s->hall->name}}- {{$h_s->hall->venue->venue_name}}</td>
             <td>{{$h_s->sanse->name}}</td>
             <td>{{$h_s->Event['title']}}</td>
             <td>{{$h_s->created_at}}</td>
             <td>{{$h_s->updated_at}}</td>
             <td>
                <div class="text-center">
                   {{-- <a href="{{'edit_my_comment/'.$comment->id}}">
                      <button type="button" name="edit" class="btn btn-primary">Edit</button>
                   </a>
                    --}}
                  <a href="{{'delete_hall_sanse/'.$h_s->id}}">
                        <button type="button" name="delete" class="btn btn-danger">Delete</button>
                   </a>
              
                </div>
                
             </td>

        </tr> 
          @endforeach
       
      </tbody>
 </table>
</div>


        

<script>
 $(document).ready( function () {
   
  $('#laravel_datatable').DataTable();

   

});
</script>

@endsection
