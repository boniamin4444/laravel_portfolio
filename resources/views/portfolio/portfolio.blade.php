@extends('adminlayouts.app')

@section('content')
<!-- Portfolio Section -->
<section id="portfolio">
    <h2 class="text-center mb-5" style="font-weight: bold;">My Portfolio</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Live Link</th>
                    <th>Video Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($abc as $portfolio)
                <tr>
                    <td>
                        <img src="{{ asset('storage/'.$portfolio->image) }}" alt="Portfolio Image" style="width: 100px; height: 75px;">
                    </td>
                    <td>{{ $portfolio->title }}</td>
                    <td>{{ $portfolio->description }}</td>
                    <td>
                        <a href="{{ $portfolio->live_link }}" class="btn btn-sm btn-outline-warning" target="_blank">View Live</a>
                    </td>
                    <td>
                        @if($portfolio->video_link)
                            <a href="{{ $portfolio->video_link }}" class="btn btn-sm btn-outline-warning" target="_blank">View Video</a>
                        @else
                            <span>No Video</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
