<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('booking.servicesShow', compact('services'));
    }
}
