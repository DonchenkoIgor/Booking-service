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
        return view('booking.services', compact('services'));
    }

    public function select($masterId)
    {
        $master = Master::findOrFail($masterId);
        $services = Service::all();

        return view('booking.services', compact('services', 'master'));
    }

    public function showBookingForm($masterId, $serviceId, Request $request)
    {
        $service = Service::findOrFail($serviceId);
        $master = Master::findOrFail($masterId);

        $price = $request->query('price');
        $duration = $request->query('duration');

        return view('booking.form', compact('service', 'master', 'price', 'duration'));
    }

    public function orderSubmit(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required',
            'master_id' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        Order::create($validated);

        return redirect()->route('booking')->with('success', 'Бронирование успешно оформлено!');
    }
}
