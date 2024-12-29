<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:50',
            'year' => 'required|integer|min:1901|max:' . date('Y'),
            'license_plate' => 'required|string|max:20|unique:vehicles,license_plate|regex:/^\d{2}-[A-Z]{2}-\d{2}$/',
            'model' => 'required|string|max:50',
            'version' => 'nullable|string|max:50',
            'submodel' => 'nullable|string|max:50',
            'color' => 'required|string|max:20',
            'vehicle_logo' => 'nullable|url',
            'doors' => 'required|integer|min:2|max:10',
            'engine_power' => 'nullable|integer|min:1',
            'traction' => 'nullable|in:FWD,RWD,AWD,4WD',
            'gearbox' => 'nullable|in:Manual,Semi-Automatic,Automatic',
            'fuel' => 'required|in:Petrol,Diesel,Electric,Hybrid',
            'color_type' => 'nullable|in:Solid,Metallic,Matte,Pearl',
            'vehicle_class' => 'required|in:Class 1,Class 2,Class 3,Class 4',
        ]);

        Vehicle::create([
            'brand' => $validatedData['brand'],
            'year' => $validatedData['year'],
            'license_plate' => $validatedData['license_plate'],
            'model' => $validatedData['model'],
            'version' => $validatedData['version'] ?? null,
            'submodel' => $validatedData['submodel'] ?? null,
            'color' => $validatedData['color'],
            'vehicle_logo' => $validatedData['vehicle_logo'] ?? null,
            'doors' => $validatedData['doors'],
            'engine_power' => $validatedData['engine_power'] ?? null,
            'traction' => $validatedData['traction'] ?? null,
            'gearbox' => $validatedData['gearbox'] ?? null,
            'fuel' => $validatedData['fuel'],
            'color_type' => $validatedData['color_type'] ?? null,
            'vehicle_class' => $validatedData['vehicle_class'],
        ]);


        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle): View
    {
        $apiUrl = env('API_URL') . '/drivers/plate/' . $vehicle->license_plate;

        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $drivers = $response->json()['data'];
            // dd($drivers);
        } else {
            $drivers = null;
        }

        return view('vehicles.show', [
            'vehicle' => $vehicle,
            'drivers' => $drivers
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle): string
    {
        return 'Edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return 'Update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicles listing updated successfully!');
    }
}
