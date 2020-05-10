@extends('layouts.admin-dashboard.master')

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>start time</th>
        <th>end time</th>
        <th>name</th>
        <th>sanse date</th>
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($sanses as $sanse )

             <tr>
             <th scope="row">{{$sanse->id}}</th>
             <td  >{{$sanse->sanse_start}}</td>
             <td>{{$sanse->sanse_end}}</td>
             <td>{{$sanse->name}}</td>
             <td>{{$sanse->sansdate}}</td>
             <td>
                <div class="text-center">
                   
                   
                <a href="{{'delete_sanse/'.$sanse->id}}">
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
