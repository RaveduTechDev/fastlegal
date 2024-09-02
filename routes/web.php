<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang-kami', function () {
    return view('tentang-kami', ['title' => 'Fast Legal Indonesia - Tentang Kami']);
});

Route::get('/pendirian-perusahaan', function () {
    return view('pendirian-perusahaan', ['title' => 'Fast Legal Indonesia - Pendirian Perusahaan']);
});

Route::get('/pendirian-pt', function () {
    return view('pendirian-pt', ['title' => 'Fast Legal Indonesia - Pendirian PT']);
});

Route::get('/pendirian-cv', function () {
    return view('pendirian-cv', ['title' => 'Fast Legal Indonesia - Pendirian CV']);
});

Route::get('/pendirian-firma', function () {
    return view('pendirian-firma', ['title' => 'Fast Legal Indonesia - Pendirian Firma']);
});

Route::get('/pendirian-koperasi', function () {
    return view('pendirian-koperasi', ['title' => 'Fast Legal Indonesia - Pendirian Koperasi']);
});

Route::get('/pendirian-yayasan', function () {
    return view('pendirian-yayasan', ['title' => 'Fast Legal Indonesia - Pendirian Yayasan']);
});

Route::get('/pendirian-perkumpulan', function () {
    return view('pendirian-perkumpulan', ['title' => 'Fast Legal Indonesia - Pendirian Perkumpulan']);
});

Route::get('/pendirian-persekutuan-perdata', function () {
    return view('pendirian-persekutuan-perdata', ['title' => 'Fast Legal Indonesia - Pendirian Persekutuan Perdata']);
});

Route::get('/fasthalal', function () {
    return view('fasthalal', ['title' => 'Fast Legal Indonesia - Fasthalal']);
});

Route::get('/fastkonstruksi', function () {
    return view('fastkontruksi', ['title' => 'Fast Legal Indonesia - Fastkontruksi']);
});

Route::get('/fastproperti', function () {
    return view('fastproperti', ['title' => 'Fast Legal Indonesia - Fastproperti']);
});

Route::get('/fasttax', function () {
    return view('fasttax', ['title' => 'Fast Legal Indonesia - Fasttax']);
});

Route::get('/layanan-lainnya', function () {
    return view('layanan-lainnya', ['title' => 'Fast Legal Indonesia - Layanan Lainnya']);
});

Route::get('/partner-client', function () {
    return view('client', ['title' => 'Fast Legal Indonesia - Partner Client Kami']);
});

Route::get('/hubungi-kami', function () {
    return view('kontak', ['title' => 'Fast Legal Indonesia - Hubungi Kami']);
});

Route::post('/hubungi-kami/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/detail/{slug}', [ArticleController::class, 'detail']);
Route::get('/kategori/{category:slug}', [ArticleController::class, 'category']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
