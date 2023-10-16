@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/'.$products->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="categoryId"> <!-- Make sure to include the name attribute for form submission -->
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $products->category->id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea class="form-control" name="smallDescription">{{ $products->smallDescription }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description">{{ $products->description }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" value="{{ $products->originalPrice }}" name="originalPrice">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Sale Price</label>
                    <input type="number" class="form-control" value="{{ $products->salePrice }}" name="salePrice">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" value="{{ $products->qty }}" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bestSeller">Best Seller</label>
                    <input type="checkbox" {{ $products->bestSeller == "1" ? 'checked' : '' }} name="bestSeller" id="bestSeller">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="feature">Feature</label>
                    <input type="checkbox" {{ $products->feature == "1" ? 'checked' : '' }}  name="feature" id="feature">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="saleProduct">Sale</label>
                    <input type="checkbox" {{ $products->saleProduct == "1" ? 'checked' : '' }} name="saleProduct" id="saleProduct">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" value="{{ $products->metaTitle }}" name="metaTitle">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea class="form-control" name="metaDescription">{{ $products->metaDescription }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="metaKeywords">{{ $products->metaKeywords }}</textarea>
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="">Images (up to 4 images)</label>

                    @if($products->images)
                        @foreach($products->images as $image)
                            <img src="{{ asset($image) }}" alt="Product Image" class="product-image">
                        @endforeach
                    @else
                        <p>No images available</p>
                    @endif

                    <input type="file" name="images[]" class="form-control" multiple>
                </div>


                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection