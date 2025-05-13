<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $masters = Master::paginate(3);

        return view('booking.index', compact('masters'));
    }
}
