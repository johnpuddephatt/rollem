<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public static function show(Production $production)
    {
        return view("production.show", compact("production"));
    }
}
