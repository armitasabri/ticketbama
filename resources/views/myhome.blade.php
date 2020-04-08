@extends('layouts.confer.master')

@section('firstslider')
  @include('layouts.confer.partials.firstslider')
@endsection

@section('fastshopping')
  @include('layouts.confer.partials.fastshopping')
@endsection

@section('featuremovies')
  @include('layouts.confer.partials.featuremovies')   
@endsection

@section('bestsellers')
  @include('layouts.confer.partials.bestsellers')
@endsection

{{-- @section('movietrailer')
  @include('layouts.confer.partials.theatre1')
@endsection --}}

@section('theatre')
  @include('layouts.confer.partials.theatre')
@endsection

@section('concertsection')
  @include('layouts.confer.partials.concertsection')
@endsection

@section('sidebarcolumn')
  @include('layouts.confer.partials.sidebarcolumn')
@endsection

@section('commentslider')
  @include('layouts.confer.partials.commentslider')
@endsection

@section('blognews')
  @include('layouts.confer.partials.blognews')
@endsection

{{-- @section('contactus')
  @include('layouts.confer.partials.contactus') 
@endsection --}}
