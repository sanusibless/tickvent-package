<?php

use Illuminate\Support\Facades\Route;

    Route::get("/api", function (){
        return response()->json([
            "status" => "success",
            "data" => [
                'name' => "Blessing Sanusi",
                "phone" => "08133667142"
            ]
        ], 200);
    });
?>