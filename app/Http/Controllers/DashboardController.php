<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     // Count all cars
    //     $carCount = Car::count();

    //     // Return the view with car count
    //     return view('dashboard.dashboard.index', ['carCount' => $carCount]);
    // }

    public function index()
    {
        // Total mobil
        $carCount = Car::count();

        // Distribusi tipe mobil
        $typeDistribution = Car::select('type')
            ->selectRaw('count(*) as total')
            ->groupBy('type')
            ->pluck('total', 'type');

        // Distribusi fuel type
        $fuelDistribution = Car::select('fuel_type')
            ->selectRaw('count(*) as total')
            ->groupBy('fuel_type')
            ->pluck('total', 'fuel_type');

        // Rata-rata atribut utama
        $averageStats = [
            'price' => Car::avg('price'),
            'kilometer_used' => Car::avg('kilometer_used'),
            'fuel_efficiency' => Car::avg('fuel_efficiency'),
            'usage_age' => Car::all()->avg('usage_age'),
            'warranty_remaining_days' => Car::all()->avg('warranty_remaining_days'),
        ];

        // Jumlah mobil per tahun rilis
        $carsPerYear = Car::selectRaw('YEAR(release_date) as year, COUNT(*) as total')
            ->groupBy('year')
            ->orderBy('year')
            ->pluck('total', 'year');

        return view('dashboard.dashboard.index', [
            'carCount' => $carCount,
            'typeDistribution' => $typeDistribution,
            'fuelDistribution' => $fuelDistribution,
            'averageStats' => $averageStats,
            'carsPerYear' => $carsPerYear,
        ]);
    }
}
