@extends('layouts.admin-dashboard.master')


   

@section('content')



<div class="container pt-5 " style="direction:ltr;margin-right:180px;" >
  
 <table class=" table table-bordered"  id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>title</th>
        <th>event_date</th>
        <th>category</th>
        <th>director</th>
        <th>duration</th>
        <th >description</th>
        {{-- <th>sanse</th> --}}
        {{-- <th>hall</th> --}}
        <th>cast</th>
        <th>genre</th>
        <th>artist</th>
        <th>photos</th>
        <th>fileimage</th>
        {{-- <th>created_at</th>
        <th>updated_at</th> --}}
        <th style="padding:0 20px;text-align:center">actions</th>

       </tr>
    </thead>
     <tbody>
          @foreach ($events as $event )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$event->id}}</th>
             <td  >{{$event->title}}</td>
             <td>{{$event->event_date}}</td>
             <td>{{$event->Category['name']}}</td>
             <td>{{$event->director}}</td>
             <td >{{$event->duration_minute}}</td>
             <td style="min-width:200px;">{{$event->description}}</td>
             {{-- <td>{{$event->sanses_id}}</td> --}}
             {{-- <td>{{$event->halls_id}}</td> --}}
             <td>{{$event->cast}}</td>
             <td>{{$event->Genre['name']}}</td>
             <td>{{$event->artist}}</td>
             <td>  
                 @foreach($event->Photo->take(4) as $photo)
                <div class="col-4 " style="height:190px">
                        <img src="../assets/img/feature-movies/{{$photo->path}}" alt="" class="border shadow" style="height:100px;width:100px">
                </div>
            @endforeach
           </td>
             <td><img src="../assets/img/feature-movies/{{$event->fileimage}}" alt="" style="height:100px;width:100px"></td>
             {{-- <td>{{$event->created_at}}</td>
             <td>{{$event->updated_at}}</td> --}}
             <td>
                <div class="text-center">
                <a href="{{'edit_my_event/'.$event->id}}">
                  <button type="button" name="edit" class="btn btn-warning ">
                     Edit
                  </button>
                  </a> 
               <a href="{{'delete_my_event/'.$event->id}}">
                  <button type="button" name="delete" class="btn btn-danger mt-2" onclick="return confirm('آیا مطمئن هستید؟')" >Delete
                     </button></a>
                
               

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
