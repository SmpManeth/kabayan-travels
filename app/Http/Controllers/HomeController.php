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
                'destination_city' => 'Manila',
                'origin_city' => 'London',
                'price' => 525,
                'cabin_class' => 'economy',
                'from_date' => '05 MAY -2025',
                'to_date' => '20 May 2025'
            ],
            [
                'assets' => [
                    'file_path' => 'images/Qatar-logo.png',
                ],
                'destination_city' => 'Clark  ',
                'origin_city' => 'London',
                'price' => 699,
                'cabin_class' => 'economy',
                'from_date' => '05 MAY -2025',
                'to_date' => '20 May 2025'
            ],
            [
                'assets' => [
                    'file_path' => 'images/Emirates-logo.png',
                ],
                'destination_city' => 'Cebu  ',
                'origin_city' => 'London',
                'price' => 799,
                'cabin_class' => 'economy',
                'from_date' => '05 MAY -2025',
                'to_date' => '20 May 2025'
            ],
            [
                'assets' => [
                    'file_path' => 'images/Malaysian-logo.png',
                ],
                'destination_city' => 'Manila',
                'origin_city' => 'London',
                'price' => 728,
                'cabin_class' => 'economy',
                'from_date' => '05 MAY -2025',
                'to_date' => '20 May 2025'
            ],
            
        ];



        return view('home', compact('flights'));
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
