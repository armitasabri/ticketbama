@extends('layouts.admin-dashboard.master')

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>venue name</th>
        <th>location</th>
        <th>type</th>
        <th>capacity</th>
        <th>phone</th>
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($venues as $venue )

             <tr>
             <th scope="row">{{$venue->id}}</th>
             <td  >{{$venue->venue_name}}</td>
             <td>{{$venue->location}}</td>
             <td>{{$venue->venue_type}}</td>
             <td>{{$venue->capacity}}</td>
             <td>{{$venue->phone}}</td>
             <td>
                <div class="text-center">
                  
                   
                <a href="{{'delete_venue/'.$venue->id}}">
                        <button type="button" name="delete" class="btn btn-danger" onclick="return confirm('برای حذف مطمئن هستید؟')">Delete</button>
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
