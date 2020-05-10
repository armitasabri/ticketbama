@extends('layouts.admin-dashboard.master')

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>name/th>
        <th>location</th>
        <th>venue</th>
      
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($halls as $hall )

             <tr>
             <th scope="row">{{$hall->id}}</th>
             <td  >{{$hall->name}}</td>
             <td>{{$hall->location}}</td>
             <td>{{$hall->venue->venue_name}}</td>
        
             <td>
                <div class="text-center">
                   
                   
                <a href="{{'delete_hall/'.$hall->id}}">
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
