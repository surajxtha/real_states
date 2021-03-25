<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $title = 'Property';
        $properties = Property::all();
        return view('cms.properties.index', compact('properties', 'title'));
    }
}
