<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Space;

class ApiController extends Controller
{
    public function getSpaces(Request $request) {
        $space = new Space();
        return $space->getSpaces($request->lat, $request->lng, $request->rad);
    }
}
