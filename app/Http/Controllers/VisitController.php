<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Link;
use App\models\Visit;

class VisitController extends Controller
{
    public function store(Request $request, Link $link)
    {
        return $link-> visits()
            ->create([
                'user_agent' => $request->useragent()
            ]);

    }
}
