@extends('adminlayouts.app')

@section('content')
<div class="container">
    <h2>Create a New Portfolio</h2>

    <form id="portfolioForm" action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <!-- Live Link -->
        <div class="mb-3">
            <label for="live_link" class="form-label">Live Link</label>
            <input type="url" class="form-control" id="live_link" name="live_link" required>
        </div>

        <!-- Video Link -->
        <div class="mb-3">
            <label for="video_link" class="form-label">Video Link (Optional)</label>
            <input type="url" class="form-control" id="video_link" name="video_link">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Portfolio</button>
    </form>
</div>


@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Reset the form after successful submission
            document.getElementById('portfolioForm').reset();
        });
    </script>
@endif

@endsection
