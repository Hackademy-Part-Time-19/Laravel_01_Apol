<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home',
    ['titoloHome'=>'Home'], 
    ['testDes'=>'Neanche il tempo di presentarli e subito offerta TOP per Galaxy S24 Ultra. Il nuovissimo smartphone Samsung con AI è infatti disponibile ad un prezzo davvero interessante. Sono tante le promozioni e offerte disponibili da subito che consento di risparmiare anche oltre 300€ sull acquisto dei nuovi top di gamma coreani.
    Le promozioni sono differenti a seconda dello store e di seguito vi segnaliamo tutte le possibili combinazioni. Purtroppo non è semplicissimo ma speriamo di fare chiarezza con lo schema a seguire.']);
});
Route::get('/Articoli', function () {
    return view('Articoli',['titoloArticoli'=>'Articoli']);
});
Route::get('/ChiSono', function () {
    return view('ChiSono',['titoloChiSono'=>'Chi Sono']);
});

