<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World V2'
        ], 200);
    }
}
