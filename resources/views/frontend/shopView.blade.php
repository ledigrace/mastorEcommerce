@extends('layouts.front')

@section('title', $product->name)

@section('content')
    <section>
        <div class="container my-5">
            @include('frontend.components.productDetails')
        </div>
    </section>
@endsection