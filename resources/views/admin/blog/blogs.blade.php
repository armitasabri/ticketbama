@extends('layouts.admin-dashboard.master')

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>event</th>
        <th>user</th>
        <th>title</th>
        <th>description</th>
        <th>image</th>
        <th>date</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($blogs as $blog )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$blog->id}}</th>
             <td  >{{$blog->event['title']}}</td>
             <td>{{$blog->user->name}}</td>
             <td>{{$blog->title}}</td>
             <td>{{$blog->description}}</td>
             <td><img src="../assets/img/blog/{{$blog->image}}" alt="" style="height:100px;width:150px"></td>
             <td>{{$blog->news_date}}</td>
             <td>{{$blog->created_at}}</td>
             <td>{{$blog->updated_at}}</td>
             <td>
                <div class="text-center">
                   <a href="{{'edit_my_blog/'.$blog->id}}">
                      <button type="button" name="edit" class="btn btn-primary">Edit</button>
                   </a>
                   
                <a href="{{'delete_my_blog/'.$blog->id}}">
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
