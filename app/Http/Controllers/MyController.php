<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World'
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Update to database

        return response()->json([
            'message' => "User {$request->name} updated!"
        ], 200);
    }

    public function destroy($id)
    {
        // Delete from database

        return response()->json([
            'message' => 'User deleted!'
        ], 200);
    }

    public function foodMenu()
    {
        return response()->json([
            'message' => 'This is a test',
            'data' => [
                'menu' => 'Nasi Goreng Ayam',
                'price' => 12]
        ], 200);
    }
}
