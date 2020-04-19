@extends('layouts.confer.regular')

@section('content')

<div class="container" style="min-height:800px;padding-top:30vh;">
<div class="row ">
   <form action="{{route('admin_seat')}}" method="POST">
@csrf
<input type="text" placeholder="تعداد صندلی در راستای عمود" name="vertical" >
<input type="text" placeholder=" تعداد صندلی در راستای افق " name="horizontal">
<input type="submit" value="submit">

</form> 
</div>
</div>



@endsection