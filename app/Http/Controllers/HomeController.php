<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        $flights = [
            [
                'assets' => [
                    'file_path' => 'images/airchina-logo.png',
                ],
                'destination_city' => 'New York',
                'origin_city' => 'London',
                'price' => 450,
                'cabin_class' => 'economy',
                'origin_airport' => 'LHR',
                'destination_airport' => 'JFK',
            ],
            [
                'assets' => [
                    'file_path' => 'images/airchina-logo.png',
                ],
                'destination_city' => 'Paris',
                'origin_city' => 'London',
                'price' => 350,
                'cabin_class' => 'premium',
                'origin_airport' => 'LHR',
                'destination_airport' => 'CDG',
            ], [
                'assets' => [
                    'file_path' => 'images/airchina-logo.png',
                ],
                'destination_city' => 'Paris',
                'origin_city' => 'London',
                'price' => 350,
                'cabin_class' => 'premium',
                'origin_airport' => 'LHR',
                'destination_airport' => 'CDG',
            ],
            [
                'assets' => [
                    'file_path' => 'images/airchina-logo.png',
                ],
                'destination_city' => 'Tokyo',
                'origin_city' => 'London',
                'price' => 1200,
                'cabin_class' => 'business',
                'origin_airport' => 'LHR',
                'destination_airport' => 'HND',
            ],
        ];


        $options = [
            'from_date' => '2024-11-10',
            'to_date' => '2024-11-20',
        ];
        return view('home', compact('flights', 'options'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
