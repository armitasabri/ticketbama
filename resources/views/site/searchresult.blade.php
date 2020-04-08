@extends('layouts.confer.regular')

@section('content')



<section style="padding-top:20vh;padding-right:10vw;padding-bottom:20vh;">
<h4>نتایج جستجو برای "{{$k}}"</h4>
<div class="p-4">
  @forelse ($events as $item)

<h2>{{$item->Event_categories->name }}</h2>
<h2>{{$item->event_title }}</h2>
<h2>{{$item->director}}</h2>
<h2>{{$item->cast}}</h2>
<h2>{{$item->Movie_theatre_genres->genre_name}}</h2>
    
@empty 
{{$Message}}



@endforelse
</div>

</section>




@endsection