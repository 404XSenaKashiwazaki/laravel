<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // route admin
    Route::get("/admin/dashboard",[DashboardController::class, "index"])->name("admmin.dashboard");

    // route produk
    Route::prefix("/admin/produk")->group(function () {
        Route::get("/",[ProdukController::class, "index"])->name("admmin.produk");
        Route::get("/add",[ProdukController::class,"create"])->name("admin.produk.create");
    });
});
