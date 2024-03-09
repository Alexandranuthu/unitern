<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumniProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AlumniProfile;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateAlumniProfileRequest;

class AlumniProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumniProfiles = AlumniProfile::paginate(10);
        return view('AlumniProfile.index', compact('AlumniProfile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users= User::all();
        return view('AlumniProfile.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumniProfileRequest $request)
    {
        //validating the incoming request
        $validatedData = $request->validated();

        //creating a new alumni using the validated data
        $alumniProfile = new AlumniProfile($validatedData);
        //saving
        $alumniProfile->save();

        //returning the user to a different page
        return redirect()->route('alumni.show', $alumniProfile->id)->with('success', 'Alumni Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumniProfile = AlumniProfile::findOrFail($id);
        return view('AlumniProfile.show', compact('AlumniProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumniProfile = AlumniProfile::findOrFail($id);
        return view('AlumniProfile.edit', compact('AlumniProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumniProfileRequest $request, string $id): RedirectResponse
{
    $alumniProfile = AlumniProfile::findOrFail($id);
    $alumniProfile->update($request->validated());

    return redirect()->route('alumni.show', $alumniProfile->id)->with('success', 'Alumni Profile updated successfully');
}

public function updateProfilePicture(UpdateAlumniProfileRequest $request, $id)
{
    $request->validate([
        'profile_picture' => 'required|image|max:2048',
    ]);

    // To store the uploaded file in the public folder
    $path = $request->file('profile_picture')->store('profile_pictures', 'public');

    // Update the profile picture path in the database for the specific alumni profile
    $alumniProfile = AlumniProfile::findOrFail($id);
    $alumniProfile->update([
        'profile_picture' => $path,
    ]);

    return back()->with('success', 'Profile picture uploaded successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $alumniProfile = AlumniProfile::findOrFail($id);
        $alumniProfile->delete();

        return redirect()->route('alumni.index')->with('success', 'Your profile is deleted successfully');
    }
}
