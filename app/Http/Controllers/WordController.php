<?php

namespace App\Http\Controllers;

use App\Models\LetterHelper;
use App\Models\WordsHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function check($word)
    {
        return DB::table('polish_words')->where('word', $word)->exists();
    }

    public function checkArray(Request $request)
    {
        $return = [];
        foreach ($request->input('words') as $word) {
            $return[] = $this->check($word);
        }
        return $return;
    }

    public function generateLetters($howMuch)
    {
        return LetterHelper::randomLetters($howMuch);
    }

    public function getPasswordWords($howMuch)
    {
        return WordsHelper::getRandomWords($howMuch);
    }
}
