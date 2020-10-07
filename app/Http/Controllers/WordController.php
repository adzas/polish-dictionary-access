<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function check(Request $request, $word)
    {
        dd($word);
        return $request->word;
    }
}
