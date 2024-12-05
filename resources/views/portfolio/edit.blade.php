@extends('adminlayouts.app')

@section('content')
<div class="container">
    <h2>Edit Portfolio</h2>
    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $portfolio->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('storage/'.$portfolio->image) }}" alt="Current Image" class="mt-2" style="width: 100px;">
        </div>

        <div class="mb-3">
            <label for="live_link" class="form-label">Live Link</label>
            <input type="url" class="form-control" id="live_link" name="live_link" value="{{ old('live_link', $portfolio->live_link) }}" required>
        </div>

        <div class="mb-3">
            <label for="video_link" class="form-label">Video Link (Optional)</label>
            <input type="url" class="form-control" id="video_link" name="video_link" value="{{ old('video_link', $portfolio->video_link) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Portfolio</button>
    </form>
</div>
@endsection
