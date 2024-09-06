<?php

use Illuminate\Support\Facades\Route;

    Route::get("/", function (){
        return view('tickvent::layout');
    });
?>