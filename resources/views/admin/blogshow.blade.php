

@extends('adminlayouts.app')

@section

<div>
    <h2>{{ $blogPost->title }}</h2>
    <p>{{ $blogPost->content }}</p>
    
    @if($blogPost->image)
        <img src="{{ Storage::url($blogPost->image) }}" alt="Blog Image" style="max-width: 100%;">
    @endif
    
    <div style="margin-top: 20px;">
        <!-- Edit Button -->
        <a href="{{ route('blogs.edit', $blogPost->id) }}" style="padding: 10px; background-color: #4CAF50; color: white; text-decoration: none;">Edit</a>

        <!-- Delete Button -->
        <form action="{{ route('blogs.destroy', $blogPost->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="padding: 10px; background-color: #f44336; color: white; border: none; cursor: pointer;">Delete</button>
        </form>
    </div>
</div>


@endsection