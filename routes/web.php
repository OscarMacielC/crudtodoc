<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExportarActividadesController;

Route::get('/exportar-pdf', [ExportarActividadesController::class, 'exportPdf'])
    ->name('actividades.exportar-pdf');

Route::get('/exportar-doc', [ExportarActividadesController::class, 'exportDoc'])
    ->name('actividades.exportar-doc');