<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});
Route:: get('/Employes', function (){
    return view('Employes');
});
Route::get('/Ajouter',function(){
    return view('Ajouter');
});
