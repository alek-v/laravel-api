<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
    /**
     * Return random quote in JSON format
     */
    public function random()
    {
        return Quote::all()->random();
    }
}
