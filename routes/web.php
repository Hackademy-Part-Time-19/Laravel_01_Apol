<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PageController::class, 'HomePage'])->name('HomePage');

Route::get('/Articoli', [ArticleController::class, 'Index'])->name('ArticleIdex');

Route::get('/ChiSono', [PageController::class, 'WhoIam'])->name('WhoIam');

Route::get('/Articolo/{id}', [ArticleController::class, 'Show'])->name('ArticleShow');




Route::get('/Articoli/{categoria}', [ArticleController::class, 'ShowByCategory'])->name('ArticoliPerCategoria');
