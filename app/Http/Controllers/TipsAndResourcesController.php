<?php

namespace App\Http\Controllers;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;  // Correct import
use App\Models\TipsAndResources;
use App\Http\Requests\StoreTipsAndResourcesRequest;
use App\Http\Requests\UpdateTipsAndResourcesRequest;

class TipsAndResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tnr = TipsAndResources::paginate();
        return view('tnr.index', ['tipsandresources' => $tnr]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle the image upload to Cloudinary
    if ($request->hasFile('image')) {
        // Upload the image to Cloudinary
        $image = $request->file('image');
        $cloudinary = new Cloudinary(); // Create Cloudinary instance
        $uploadedImage = $cloudinary->uploadApi()->upload($image->getRealPath());

        // Get the image URL from Cloudinary response
        $imageUrl = $uploadedImage['secure_url']; // Cloudinary URL

        // Create a new TipsAndResources record
        TipsAndResources::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imageUrl,  // Store the Cloudinary image URL in the database
        ]);
    }

    // Redirect to the index or any other page with a success message
    return redirect()->route('tnr.index')->with('success', 'Tip added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show($tipsAndResources)
    {
        $tip = TipsAndResources::findOrFail($tipsAndResources);
        return view('tnr.index_detail', ['tip' => $tip]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipsAndResources $tipsAndResources)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipsAndResourcesRequest $request, TipsAndResources $tipsAndResources)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipsAndResources $tipsAndResources)
    {
        //
    }
}
