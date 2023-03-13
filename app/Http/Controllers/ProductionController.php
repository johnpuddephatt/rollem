<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public static function show(Production $production)
    {
        $related_productions = \App\Models\Production::inRandomOrder()
            ->where("id", "!=", $production->id)
            ->take(3)
            ->get();
        return view(
            "production.show",
            compact("production", "related_productions")
        );
    }
}
