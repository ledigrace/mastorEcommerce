@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Products</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="categoryId">
                        <option selected>Select a Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="smallDescription">Small Description</label>
                    <input type="text" class="form-control" name="smallDescription" id="smallDescription">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Variations</label>
                    <br>
                    <select class="selectpicker" multiple data-live-search="true" data-style="btn-primary" data-size="5" name="variations[]">
                        @foreach($variations as $variation)
                            <option value="{{ $variation->id }}">{{ $variation->name }} | {{ $variation->variationCode }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-6 mb-3">
                    <label for="originalPrice">Original Price</label>
                    <input type="number" class="form-control" name="originalPrice" id="originalPrice">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="salePrice">Sale Price</label>
                    <input type="number" class="form-control" name="salePrice" id="salePrice">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="qty">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="bestSeller">Best Seller</label>
                    <input type="checkbox" name="bestSeller" id="bestSeller">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="feature">Feature</label>
                    <input type="checkbox" name="feature" id="feature">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="saleProduct">Sale</label>
                    <input type="checkbox" name="saleProduct" id="saleProduct">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="metaTitle">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea class="form-control" name="metaDescription"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="metaKeywords"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Images (up to 4 images)</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection