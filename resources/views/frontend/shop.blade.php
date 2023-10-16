@extends('layouts.front')

@section('title')
    Mastor | LuxeBeautè International Academy Inc. - Shop Page
@endsection

@section('content')

<!-- search products section -->

@include('frontend.components.searchProduct')

<!-- end of search product section -->

<!-- all products section -->

@include('frontend.components.allProducts')

<!-- end all products section -->

@endsection
