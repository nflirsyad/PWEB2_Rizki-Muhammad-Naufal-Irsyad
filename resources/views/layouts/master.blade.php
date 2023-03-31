<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('layouts.style')
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  @include('layouts.header')
 
  @include('layouts.sidebar')

  {{-- Start #main --}}
  <main id="main" class="main">

   @yield('content')

  </main>
  <!-- End #main -->
  
  @include('layouts.footer')
  
  @include('layouts.script')

</body>

</html>