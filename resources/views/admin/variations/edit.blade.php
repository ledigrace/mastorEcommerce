@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Variation</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-variation', $variation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $variation->name }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="bestSellerVar">Best Seller</label>
                    <input type="checkbox" name="bestSellerVar" id="bestSellerVar" value="1" {{ $variation->bestSellerVar ? 'checked' : '' }}>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="outOfStock">Out of Stock</label>
                    <input type="checkbox" name="outOfStock" id="outOfStock" value="1" {{ $variation->outOfStock ? 'checked' : '' }}>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Image</label>

                    @if($variation->image)
                        <img src="{{ asset($variation->image) }}" alt="Current Image" style="max-width: 100px;">
                        <br><br>
                    @else
                        <p>No image available</p>
                    @endif

                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="variationCode">Variation Code</label>
                    <input type="text" class="form-control" name="variationCode" id="variationCode" value="{{ $variation->variationCode }}">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
