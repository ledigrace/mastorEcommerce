@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Variation</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-variation') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="bestSellerVar">Best Seller</label>
                    <input type="checkbox" name="bestSellerVar" id="bestSellerVar" value="1">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="outOfStock">Out of Stock</label>
                    <input type="checkbox" name="outOfStock" id="outOfStock" value="1">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="variationCode">Variation Code</label>
                    <input type="text" class="form-control" name="variationCode" id="variationCode">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection