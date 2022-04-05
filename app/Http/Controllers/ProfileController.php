<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(Profile $profile){
        $profi = $profile->load('user');
        return response()->json([
            'data' => $profi
        ], 200);
    }

    public function user(User $user)
    {
        $user = $user->load('profile');
        return response->json([
            'ddata' => $user
        ], 200);
    }
}
