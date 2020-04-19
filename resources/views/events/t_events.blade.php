 
@extends('layouts.confer.regular')

@section('content')

<section style="padding-top:120px;padding-bottom:50px;">
    <div class="container-fluid" >
      
           <div>
           <h4 class="pr-4 pt-4"><img src="{{asset('assets/img/icons/theater.png')}}" alt="" style="width:40px;height:40px;padding-left:4px">
            تئاترهای {{$genre->name}}</h4>
           </div>
          
      
        
    <div class="row pl-2 pr-4 pb-5 pt-4" style="min-height:400px">
        @foreach ($theatres as $theatre)
            <div class="col-2 pt-3 hvr-pop" >
            <img src="../storage/{{$theatre->fileimage}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">{{$theatre->title}}</h5>
        </div>
        @endforeach
        
       
    </div>

   
   
    
    </div>
</section>  

@endsection