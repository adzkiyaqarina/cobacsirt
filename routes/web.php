<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {  
    return view('about');  
});

Route::get('/services', function () {  
    return view('layanan');  
});

Route::get('/info', function () {  
    return view('informasi');  
});

Route::get('/report', function () {  
    return view('aduan');  
});

Route::get('/news', function () {  
    return view('detail-berita');  
});
