@extends('adminlayouts.app')

@section('content')  <!-- Define the content section -->

<!-- resources/views/admin/create.blade.php -->

<form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="details_description">Details Description</label>
        <textarea id="details_description" name="details_description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" id="image" name="image" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Create Admin</button>
</form>

@endsection  <!-- Close the content section -->
