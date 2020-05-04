@extends('layouts.admin-dashboard.master')


   

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>comment</th>
        <th>users name</th>
        <th>events  title</th>
        <th>fullname</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($comments as $comment )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$comment->id}}</th>
             <td  >{{$comment->comment}}</td>
             <td>{{$comment->User['name']}}</td>
             <td>{{$comment->Event['title']}}</td>
             <td>{{$comment->fullname}}</td>
             <td>{{$comment->Cstatus['name']}}</td>
             <td>{{$comment->created_at}}</td>
             <td>{{$comment->updated_at}}</td>
             <td>
                <div class="text-center">
                   <a href="{{'edit_my_comment/'.$comment->id}}">
                      <button type="button" name="edit" class="btn btn-primary">Edit</button>
                   </a>
                   
                  <a href="{{'delete_my_comment/'.$comment->id}}">
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

   //  $('#laravel_datatable').DataTable({
   //         processing: true,
   //         serverSide: true,
   //         ajax:"{{ Route('admin_comments.datatable') }}",
   //         columns: [
   //                  { data: 'id', name: 'id' },
   //                  { data: 'comment', name: 'comment' },
   //                  { data: 'users_id', name: 'users_id' },
   //                  { data: 'events_id', name: 'events_id' },
   //                  { data: 'fullname', name: 'fullname' },
   //                  { data: 'cstatuses_id', name: 'cstatuses_id' },
   //                  { data: 'created_at', name: 'created_at' },
   //                  { data: 'updated_at', name: 'updated_at' },
   //                  { data:'action', name: 'action' , orderable: false}

   //               ]
   //      });

});
</script>

@endsection
