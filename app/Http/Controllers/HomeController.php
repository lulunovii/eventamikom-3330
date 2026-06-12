<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Event;

class HomeController extends Controller
{
public function index()
    {
        $partners = Partner::all();
        $events = Event::all();
        return view('welcome', compact('partners', 'events'));
    }
}
