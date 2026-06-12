<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
    $event = \App\Models\Event::findOrFail($id);    
    return view('event-detail', compact('event')); 
    }

    public function checkout($event)
    {
        return view('checkout', compact('event'));
    }
     public function ticket()
    {
        return view('ticket');
    }
}
