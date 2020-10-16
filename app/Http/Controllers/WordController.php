<?php

namespace App\Http\Controllers;

use App\Models\LetterHelper;
use App\Models\WordsHelper;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function check(Request $request, $word)
    {
        // dd($word);
        return $word;
    }

    public function generateLetters(Request $request, $howMuch)
    {
        // $request się jeszcze przyda przy sprawdzaniu klucza api
        return LetterHelper::randomLetters($howMuch);
    }

    public function getPasswordWords(Request $request, $howMuch)
    {
        return WordsHelper::getRandomWords($howMuch);
    }
}
