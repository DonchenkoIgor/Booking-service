<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $masters = Master::all();
        return view('booking.index', compact('masters'));
    }
}
