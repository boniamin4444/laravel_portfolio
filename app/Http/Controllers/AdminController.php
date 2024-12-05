<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();  // Retrieve all admins
        return view('layouts.app', compact('admins'));
    }
    // Show the form for creating a new admin
    public function create()
    {
        return view('admin.admincreate');
    }

    // Store a newly created admin in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'details_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
        ]);

        $data = $request->only(['name', 'title', 'description', 'details_description']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('admin_images', 'public');
        }

        // Create new admin
        Admin::create($data);

        return redirect()->route('admin.create')->with('success', 'Admin created successfully!');
    }

    // Display the details of a specific admin
    /* public function show(Admin $admin)
    {
        return view('admin.show', compact('admin'));
    } */

    // Show the form for editing an existing admin
    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    // Update an existing admin
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'details_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
        ]);

        $data = $request->only(['name', 'title', 'description', 'details_description']);

        // Handle image upload if a new one is provided
        if ($request->hasFile('image')) {
            // Delete the old image from storage
            if ($admin->image) {
                Storage::delete('public/' . $admin->image);
            }

            $data['image'] = $request->file('image')->store('admin_images', 'public');
        }

        // Update the admin
        $admin->update($data);

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully!');
    }

    // Delete an admin
    public function destroy(Admin $admin)
    {
        // Delete the admin image if it exists
        if ($admin->image) {
            Storage::delete('public/' . $admin->image);
        }

        // Delete the admin
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully!');
    }
}
