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
    return view('Home', ['titoloHome'=>'Home']);
})->name('Home');
Route::get('/Articoli', function () {

    $Articoli=[
        ['title'=>'Articolo 0','category'=>'Zero','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
       ['title'=>'Articolo 1','category'=>'Prima','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
         ['title'=>'Articolo 2','category'=>'Seconda','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
      ['title'=>'Articolo 3','category'=>'Terza','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi']
      ];




    return view('Articoli',
    ['titoloArticoli'=>'Articoli'],
    ['Articoli'=>$Articoli]
);
})->name('Articoli');






Route::get('/ChiSono', function () {
    return view('ChiSono',['titoloChiSono'=>'Chi Sono']);
})->name('ChiSono');


Route::get('/Articolo/{id}', function($id){
    $Articoli=[
      ['title'=>'Articolo 0','category'=>'Zero','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
     ['title'=>'Articolo 1','category'=>'Prima','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
       ['title'=>'Articolo 2','category'=>'Seconda','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi'],
    ['title'=>'Articolo 3','category'=>'Terza','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam nisi']
    ];

   
    return view('Detaglio',['articolo'=> $Articoli[$id]]);
})->name('DetaglioArticolo');
