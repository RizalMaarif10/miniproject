<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function edit()
    {
        
        $user = [
            'username' => 'pesertamsib',
            'name' => 'Peserta MSIB',
            'bio' => ''
        ];

        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
       
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        
         User::find(auth()->id())->update($validated);

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}