<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\OpdController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/opd', [OpdController::class, 'index'])->name('opd'); // Hanya satu route untuk OPD
Route::get('/kuesioner', [IndexController::class, 'kuesioner'])->name('kuesioner');
Route::post('/result/store', [IndexController::class, 'store'])->name('result.store');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login'); 
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['web', 'auth'])->prefix('dasbor')->group(function () {
   Route::get('/', [DasborController::class, 'index'])->name('dasbor');
   Route::resource('/opd', OpdController::class)->names('opd');
   Route::resource('/kuesioner', KuesionerController::class)->names('kuesioner');
   Route::post('/kuesioner/checks', [KuesionerController::class, 'checks'])->name('kuesioner.checks');
   Route::resource('/responden', RespondenController::class)->names('responden');
   Route::get('/ikm', [DasborController::class, 'ikm'])->name('ikm.index');
   Route::get('/ikm/export/graph', [DasborController::class, 'ikm_export'])->name('ikm.export.graph');
   Route::get('/ikm/preview/graph', [DasborController::class, 'ikm_preview'])->name('ikm.preview.graph');
   Route::get('/ikm/export/table', [DasborController::class, 'ikm_export_table'])->name('ikm.export.table');
   Route::get('/ikm/preview/table', [DasborController::class, 'ikm_preview_table'])->name('ikm.preview.table');
   Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
   Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
   Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
   Route::post('/auth/password', [AuthController::class, 'change_password'])->name('auth.change_password');
   Route::get('/laporan/responden/export/graph', [ExportController::class, 'responden_export'])->name('responden.export.graph');
   Route::get('/laporan/responden/preview/graph', [ExportController::class, 'responden_preview'])->name('responden.preview.graph');
   Route::get('/laporan/responden/export/table', [ExportController::class, 'responden_export_table'])->name('responden.export.table');
   Route::get('/laporan/responden/preview/table', [ExportController::class, 'responden_preview_table'])->name('responden.preview.table');
   Route::get('/laporan/feedback/export/table', [ExportController::class, 'feedback_export_table'])->name('feedback.export.table');
   Route::get('/laporan/feedback/preview/table', [ExportController::class, 'feedback_preview_table'])->name('feedback.preview.table');
   Route::get('/village', [DasborController::class, 'village'])->name('village.index');
   Route::post('/village', [DasborController::class, 'village_add'])->name('village.add');
   Route::patch('/village/{uuid}', [DasborController::class, 'village_update'])->name('village.update');
   Route::delete('/village/{uuid}', [DasborController::class, 'village_destroy'])->name('village.destroy');
   Route::delete('/responden/{id}', [RespondenController::class, 'destroy'])->name('responden.destroy');
   Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
   Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');
   Route::get('/home', [HomeController::class, 'index'])->name('home');
});
