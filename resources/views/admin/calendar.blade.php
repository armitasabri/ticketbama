@extends('layouts.admin-dashboard.master')
@section('content')
<div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Calendar       </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Calendar            </h1>
          </header>
          <div class="card">
            <div class="card-header">
              <h4>Calendar</h4>
            </div>
            <div class="card-body">
             
              <div id="calendar">                                                                      </div>
            </div>
          </div>
        </div>
      </section>
    
      <script src="{{asset('assets2/vendor/jquery/jquery.min.js')}}"></script>

<script src="{{asset('assets2/vendor/fullcalendar/fullcalendar.js')}}"></script>
<script src="{{asset('assets2/vendor/fullcalendar/locale/fa.js')}}"></script>

<script>
...
var calendar = new FullCalendar.Calendar(calendarEl, {
  locale: 'fa'
});
...
</script>
      
     
      
    @endsection