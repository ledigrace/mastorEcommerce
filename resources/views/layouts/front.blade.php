<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/shop.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/shopseemore.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/login-register.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/allproducts.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;300;400;500;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="./assets/NAVBAR_Logo__1_-removebg-preview.png">
  
  <!-- <title>LuxeBeautè International Academy Inc. Shop Page</title> -->
  <title>
    @yield('title')
  </title>

</head>
<body>
  
    @include('layouts.includes.frontend.navbar')
    
    @yield('content')

    @include('layouts.includes.frontend.footer')


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>



    @yield('scripts')
</body>
</html>