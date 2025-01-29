<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beer;

class BeerController extends Controller
{
    public function index()
    {      //http://127.0.0.1:8000/api/admin/beers
        $beers = Beer::all();
        return response()->json([
            'success' => true,
            'result' => $beers
        ]);
    }
}
