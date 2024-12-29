<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $vehicles = Vehicle::latest()->limit(3)->get();

        return  view('pages.index')->with('vehicles', $vehicles);
    }
}
