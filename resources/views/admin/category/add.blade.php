@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-category') }}" method="POST">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="col-md-6">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>

                <div class="col-md-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
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

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection