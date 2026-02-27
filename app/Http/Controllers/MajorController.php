<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person; // Import Model Person langsung

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $results = [];

        if ($request->filled('name') || $request->filled('type')) {
            $name = $request->input('name');
            $type = $request->input('type');

            // Langsung ambil dari database, tidak perlu Http::get
            $results = Person::where('category', $type)
                ->where('name', 'LIKE', '%' . $name . '%')
                ->get();
        }

        return view('welcome', compact('results'));
    }

    public function show($id) {
        $person = Person::findOrFail($id);
        return view('profile', compact('person'));
    }
}