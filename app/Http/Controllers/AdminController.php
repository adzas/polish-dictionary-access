<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function enterPasswordWords()
    {
        return "password words";
    }

    public function updateDictionary()
    {
        return 'Dictionary';
    }
}
