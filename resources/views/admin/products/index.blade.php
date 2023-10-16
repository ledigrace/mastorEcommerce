@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>All Products</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Original Price</th>
                    <th>Sale Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->originalPrice }}</td>
                        <td>{{ $item->salePrice }}</td>
                        <td>
                        @if ($item->images)
                            @foreach($item->images as $image)
                                <img src="{{ asset($image) }}" class="product-image" alt="Product Image">
                            @endforeach
                        @else
                            <p>No images available</p>
                        @endif
                        </td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection