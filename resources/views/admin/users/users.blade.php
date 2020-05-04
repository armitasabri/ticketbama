@extends('layouts.admin-dashboard.master')


   

@section('content')



<div class="container pt-5" style="direction:ltr;margin-right:100px;" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>role</th>
        <th>name</th>
        <th>email</th>
        <th>avatar</th>
        {{-- <th>username</th> --}}
        {{-- <th style="width:150px;!important">password</th> --}}
        <th>mobile</th>
        {{-- <th>created_at</th>
        <th>updated_at</th> --}}
        <th style="padding:0 100px;text-align:center">action</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($users as $user )
     
             <tr>
             <th scope="row">{{$user->id}}</th>
             <td  >{{$user->Role['name']}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td><img src="../assets/img/avatars/{{$user->fileimage}}" alt="" style="width:80px;height:80px"></td>
             {{-- <td>{{$user->username}}</td> --}}
             {{-- <td  >{{$user->password}}</td> --}}
             <td>{{$user->mobile}}</td>
             {{-- <td>{{$user->created_at}}</td>
             <td>{{$user->updated_at}}</td> --}}
             <td>
                <div class="text-center">
                   
                  <a href="{{'edit_my_user/'.$user->id}}">
                     <button type="button" name="delete" class="btn btn-primary" >Edit
                     </button>
                      </a> 
                
               
                  <a href="{{'delete_my_user/'.$user->id}}">
                     <button type="button" name="delete" class="btn btn-danger" onclick="return confirm('آیا مطمئن هستید؟')"> Delete
                     </button>
                      </a>
                
                </div>
                
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
