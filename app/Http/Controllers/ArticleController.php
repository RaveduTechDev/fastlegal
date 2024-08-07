<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // view page article
    public function index()
    {
        return view('artikel', [
            'title' => 'Fastlegal Indonesia - Artikel',
        ]);
    }

    // view page detail article
    public function detail($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('artikel-detail', [
            'title' => "Fastlegal Indonesia - $article->title",
            'article' => $article,
        ]);
    }
}
