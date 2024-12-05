<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boniamins = BlogPost::get(); // Retrieve all blog posts

        return view('welcome', compact('boniamins')); // Pass data to the 'blog' view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog'); // Show the create post form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
        ]);

        if($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogimage', 'public');
            $validateData['image'] = $imagePath;
        }

        BlogPost::create($validateData); // Create new blog post
        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('blog.show', compact('blogPost')); // Show single blog post
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('admin.edit', compact('blogPost')); // Show edit form for existing post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
        ]);

        if($request->hasFile('image')) {
            // Delete old image from storage
            if ($blogPost->image) {
                Storage::delete('public/' . $blogPost->image);
            }

            $imagePath = $request->file('image')->store('blogimage', 'public');
            $validateData['image'] = $imagePath;
        }

        // Update the blog post
        $blogPost->update($validateData);
        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        // Delete the image from storage
        if ($blogPost->image) {
            Storage::delete('public/' . $blogPost->image);
        }

        $blogPost->delete(); // Delete the blog post
        return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully!');
    }
}
