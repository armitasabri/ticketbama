<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.confer.partials.head')
</head>

<body>

  <div class="myloader">
    <img src="{{asset('assets/img/loaders/first.gif')}}" class="rounded-circle mygift" alt="loading..." >
    </div>

        @include('layouts.confer.partials.header')



         @yield('content')


  @include('layouts.confer.partials.footer')

  @include('layouts.confer.partials.footer-scripts')
</body>

</html>
