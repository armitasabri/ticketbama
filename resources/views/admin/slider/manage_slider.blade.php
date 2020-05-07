@extends('layouts.admin-dashboard.master')
  

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>path</th>
        <th>event</th>
        <th>created_at</th>
        <th>updated_at</th>
      <th>Action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($images as $image )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$image->id}}</th>
             <td ><img src="../assets/img/movie-posters/{{$image->fileimage}}" alt="" style="height:150px;width:150px"></td>
             <td>{{$image->event['title']}}</td>

             <td>{{$image->created_at}}</td>
             <td>{{$image->updated_at}}</td>
             <td>
             <a href="{{'destroy_slider/'.$image->id}}"><button class="btn btn-danger">
                     Delete
                     </button></a>
                 <a href="{{'edit_slider/'.$image->id}}"><button class="btn btn-primary">
                     Edit
                     </button></a>    
             </td>
             

        </tr> 
          @endforeach
       
      </tbody>
 </table>
</div>


        

<script>
   console.log('hiiii');
 $(document).ready( function () {
   
  $('#laravel_datatable').DataTable();

 

});
</script>

@endsection
