<?php

namespace App\Http\Controllers\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World V2'
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Save to database

        return response()->json([
            'message' => "User {$request->name} created!"
        ], 201);
    }
}
