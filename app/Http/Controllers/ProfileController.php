<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $attendedEvents = $user->events;
        return view('profile.show', compact('user', 'attendedEvents'));
    }
}
