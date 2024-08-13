<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {

        $articleMain = Article::status()
            ->createdat()
            ->limit(2)->get();

        $articleOther = Article::status()
            ->inRandomOrder()
            ->limit(5)
            ->get();

        return view('home', [
            'title' => 'Fast Legal Indonesia - Layanan Pengurusan Legalitas Perusahaan dan Perorangan',
            'articleMain' => $articleMain,
            'articleOther' => $articleOther
        ]);
    }
}
