<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Fastlegal Indonesia - Layanan Pengurusan Legalitas Perusahaan dan Perorangan']);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami', ['title' => 'Fastlegal Indonesia - Tentang Kami']);
});

Route::get('/pendirian-perusahaan', function () {
    return view('pendirian-perusahaan', ['title' => 'Fastlegal Indonesia - Pendirian Perusahaan']);
});

Route::get('/pendirian-pt', function () {
    return view('pendirian-pt', ['title' => 'Fastlegal Indonesia - Pendirian PT']);
});

Route::get('/pendirian-cv', function () {
    return view('pendirian-cv', ['title' => 'Fastlegal Indonesia - Pendirian CV']);
});

Route::get('/pendirian-firma', function () {
    return view('pendirian-firma', ['title' => 'Fastlegal Indonesia - Pendirian Firma']);
});

Route::get('/pendirian-koperasi', function () {
    return view('pendirian-koperasi', ['title' => 'Fastlegal Indonesia - Pendirian Koperasi']);
});

Route::get('/pendirian-yayasan', function () {
    return view('pendirian-yayasan', ['title' => 'Fastlegal Indonesia - Pendirian Yayasan']);
});

Route::get('/pendirian-perkumpulan', function () {
    return view('pendirian-perkumpulan', ['title' => 'Fastlegal Indonesia - Pendirian Perkumpulan']);
});

Route::get('/pendirian-persekutuan-perdata', function () {
    return view('pendirian-persekutuan-perdata', ['title' => 'Fastlegal Indonesia - Pendirian Persekutuan Perdata']);
});

Route::get('/fasthalal', function () {
    return view('fasthalal', ['title' => 'Fastlegal Indonesia - Fasthalal']);
});

Route::get('/fastkonstruksi', function () {
    return view('fastkontruksi', ['title' => 'Fastlegal Indonesia - Fastkontruksi']);
});

Route::get('/fastproperti', function () {
    return view('fastproperti', ['title' => 'Fastlegal Indonesia - Fastproperti']);
});

Route::get('/fasttax', function () {
    return view('fasttax', ['title' => 'Fastlegal Indonesia - Fasttax']);
});

Route::get('/layanan-lainnya', function () {
    return view('layanan-lainnya', ['title' => 'Fastlegal Indonesia - Layanan Lainnya']);
});

Route::get('/partner-client', function () {
    return view('client', ['title' => 'Fastlegal Indonesia - Partner Client Kami']);
});

Route::get('/hubungi-kami', function () {
    return view('kontak', ['title' => 'Fastlegal Indonesia - Hubungi Kami']);
});

// Route::get('/artikel', function () {
//     return view('artikel', ['title' => 'Fastlegal Indonesia - Artikel']);
// });

Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/detail/{slug}', [ArticleController::class, 'detail']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
