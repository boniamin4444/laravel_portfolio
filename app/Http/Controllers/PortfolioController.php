<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
   {
    // Retrieve all portfolio items
    $portfolios = Portfolio::all();
    
    // First, pass data to the 'welcome' view
    $view1 = view('welcome', compact('portfolios'));

    return $view1;  // or return $view2 depending on which view you'd like to display first
   }

    
    public function store(Request $request)
    {   
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'live_link' => 'required|url',
            'video_link' => 'nullable|url',
        ]);

        // Handle the file upload
        $imagePath = $request->file('image')->store('portfolio_images', 'public');

        // Create a new portfolio item
        $portfolio = Portfolio::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'live_link' => $validatedData['live_link'],
            'video_link' => $validatedData['video_link'] ?? null,
        ]);

        // Redirect with success message
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item added successfully!');
    }

    public function create()
    {
        return view('portfolio.create'); // Return a view with a form to create a portfolio
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.edit', compact('portfolio'));
    }

    // Update the specified portfolio
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'live_link' => 'required|url',
            'video_link' => 'nullable|url',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $validatedData['title'];
        $portfolio->description = $validatedData['description'];
        $portfolio->live_link = $validatedData['live_link'];
        $portfolio->video_link = $validatedData['video_link'] ?? null;

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            Storage::delete('public/' . $portfolio->image);
            $portfolio->image = $request->file('image')->store('portfolio_images', 'public');
        }

        $portfolio->save();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated successfully!');
    }

    // Remove the specified portfolio
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Delete image from storage
        Storage::delete('public/' . $portfolio->image);

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted successfully!');
    }
}
