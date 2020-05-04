@extends('layouts.admin-dashboard.master')
  

@section('content')



<div class="container pt-5" style="direction:ltr" >
  
 <table class="table table-bordered" id="laravel_datatable">
    <thead>
       <tr>
        <th>id</th>
        <th>user</th>
        <th>order time</th>
        <th>price(toman)</th>
        <th>payment status</th>
        <th>event</th>
        <th>created_at</th>
        <th>updated_at</th>
      

       </tr>
    </thead>
     <tbody>
          @foreach ($orders as $order )
     {{-- {{dd($comment->user->)}} --}}
             <tr>
             <th scope="row">{{$order->id}}</th>
             <td >{{$order->user->name}}</td>
             <td>{{$order->order_time}}</td>
             <td>{{$order->final_price}}</td>
             <td>{{$order->payment_status}}</td>
             <td>{{$order->event->title}}</td>
             <td>{{$order->created_at}}</td>
             <td>{{$order->updated_at}}</td>
             

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
