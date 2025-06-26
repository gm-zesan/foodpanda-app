<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AutoLoginController extends Controller
{
    public function handle(Request $request)
    {
        $token = $request->query('token');

        if (!$token) {
            return redirect()->route('login')->withErrors('Token missing.');
        }
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get('https://ecom-app.deshicreative.com/api/user');

        if ($response->failed()) {
            return redirect()->route('login')->withErrors('Invalid token.');
        }

        $userData = $response->json();

        $user = User::firstOrCreate(
            ['email' => $userData['email']],
            ['name' => $userData['name'], 'password' => bcrypt('defaultpassword')]
        );
        
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
