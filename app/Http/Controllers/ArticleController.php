<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $query = Article::filter(request(['search', 'category']));

        $jumlah = $query->count();
        $jumlah_formatted = '<strong>' . number_format($jumlah, 0, ",", ".") . '</strong>';

        $sub_title = '';
        $category_name = '';
        $user_name = '';
        if (request('category')) {
            $category = Category::where('slug', request('category'))->first();
            $category_search = '<strong>' . request('category') . '</strong>';
            $category_name = $category ? $category->name : '<p class="text-sm sm:text-md font-semibold text-gray-800">kategori "' . $category_search . '" tidak ditemukan</p>';
        }

        if (request('author')) {
            $user = User::where('username', request('author'))->first();
            $user_name = $user ? $user->name : 'user tidak ditemukan';
        }

        if (request('search')) {
            $search_term = '<strong>' . request('search') . '</strong>';
            $sub_title = '<p class="text-sm sm:text-md font-semibold text-gray-800">Sekitar ' . $jumlah_formatted . ' hasil pencarian artikel dengan kata kunci: ' . $search_term . '</p>';
        } elseif (request('category')) {
            $sub_title = '<p class="text-sm sm:text-md font-semibold text-gray-800">' . $category_name . '</p>';
        } else if (request('author')) {
            $username = '<strong>' . $user_name . '</strong>';
            $sub_title = '<p class="text-sm sm:text-md font-semibold text-gray-800">Artikel yang dibuat oleh: ' . $username . '</p>';
        } else {
            $sub_title = '<p class="text-sm sm:text-md font-semibold text-gray-800">Berikut informasi artikel yang kami sediakan.</p>';
        }

        $articles = $query->latest()->status()->paginate(7)->withQueryString();
        $articleOther = Article::status()
            ->inRandomOrder()
            ->limit(5)
            ->get();

        return view('artikel', [
            'title' => 'Fast Legal Indonesia - Artikel',
            'sub_title' => $sub_title,
            'articles' => $articles,
            'articleOther' => $articleOther,
        ]);
    }

    // view page detail article
    public function detail($slug)
    {
        $article = Article::where('slug', $slug)->first();

        $paginationDetailArticle = $article->simplePaginate();

        $articleOther = Article::status()
            ->inRandomOrder()
            ->limit(5)
            ->get();


        return view('artikel-detail', [
            'title' => "Fast Legal Indonesia - $article->title",
            'article' => $article,
            'articleOther' => $articleOther,
            'paginationDetailArticle' => $paginationDetailArticle
        ]);
    }

    //category
    public function category(Category $category)
    {
        $articles = $category->articles()->latest()->status()->search()->paginate(7);

        return view('artikel', [
            'title' => 'Fastlegal Indonesia - Kategori',
            'content' => '(' . count($articles) . ')' . ' Artikel dari kategori ' . $category->name,
            'articles' => $articles,
        ]);
    }
}
