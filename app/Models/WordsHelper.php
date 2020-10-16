<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordsHelper extends Model
{
    use HasFactory;

    const DICTIONARY_PASSWORD_WORDS = [
        'wilk',
        'jajko',
        'agent',
        'potas',
        'czekolada',
        'złoto',
    ];

    public static function getRandomWords(int $howMuch)
    {
        $returnWords = [];
        for ($i=0; $i < $howMuch; $i++) { 
            $returnWords[] = self::DICTIONARY_PASSWORD_WORDS[rand(0, self::max())];
        }
        return $returnWords;
    }

    private static function max()
    {
        return count(self::DICTIONARY_PASSWORD_WORDS) - 1;
    }
}
