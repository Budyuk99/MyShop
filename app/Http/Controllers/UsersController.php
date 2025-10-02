<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function getWeatherStats()
    {
        $test = User::get();

        $apiKey = config('services.openweather.key');

        $city = 'Brest';

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'ru',
        ]);

        $weather = $response->json();

        return view('welcome', compact('weather'));
    }
}