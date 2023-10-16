@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Category Page</h1>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection