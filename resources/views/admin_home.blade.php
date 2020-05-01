@extends('layouts.admin-dashboard.master')

@section('counts')
  @include('layouts.admin-dashboard.partials.counts')
@endsection

@section('charts')
  @include('layouts.admin-dashboard.partials.charts')
@endsection

@section('statistics')
  @include('layouts.admin-dashboard.partials.statistics')   
@endsection

@section('updates')
  @include('layouts.admin-dashboard.partials.updates')
@endsection
