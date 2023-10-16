@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Variations</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Variation Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($variations as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if ($item->image)
                                <img src="{{ asset($item->image) }}" class="product-image" alt="Product Image">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>

                        <td>{{ $item->variationCode }}</td>
                        <td>
                            <a href="{{ url('edit-variation', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('delete-variation', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection