<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('web')->group(function ()
{
    //index slider
    route::get('/slides', 
    [App\Http\Controllers\Api\Web\SlideController::class, 'index']);

    route::get('/agendas', 
    [App\Http\Controllers\Api\Web\AgendaController::class, 'index']);

    route::get('/agendas/{slug}', [\App\Http\Controllers\Api\Web\AgendaController::class, 'index', 'show']);

    Route::get('/kategoriberitas', [App\Http\Controllers\Api\Web\KategoriberitaController::class, 'index']);

    //show kategori berita
    Route::get('/kategoriberitas/{slug}', [App\Http\Controllers\Api\Web\KategoriberitaController::class, 'show']);

    //kategori berita sidebar
    Route::get('/kategoriberitaSidebar', [App\Http\Controllers\Api\Web\KategoriberitaController::class, 'kategoriberitaSidebar']);
	
    //index berita
    Route::get('/beritas', [App\Http\Controllers\Api\Web\BeritaController::class, 'index']);

    //show berita
    Route::get('/beritas/{slug}', [App\Http\Controllers\Api\Web\BeritaController::class, 'show']);

    //berita beranda
    Route::get('/beritaBeranda', [App\Http\Controllers\Api\Web\BeritaController::class, 'beritaBeranda']);

    //Banner
    Route::get('/banners', [App\Http\Controllers\Api\Web\BannerController::class, 'index']);

    //Banner
    Route::get('/profils', [App\Http\Controllers\Api\Web\ProfilController::class, 'index']);
    
    //Gallerivideo
    Route::get('/galerivideos', [App\Http\Controllers\Api\Web\GalerivideoController::class, 'index']);
    
    //Albumfoto
    Route::get('/albumfotos', [App\Http\Controllers\Api\Web\AlbumfotoController::class, 'index']);

    //Galerifoto
    Route::get('/galerifotos', [App\Http\Controllers\Api\Web\GalerifotoController::class, 'index']);
    
    Route::get('/halamans', [App\Http\Controllers\Api\Web\HalamanController::class, 'index']);

    //show halaman
    Route::get('/halamans/{slug}', [App\Http\Controllers\Api\Web\HalamanController::class, 'show']);

    //Kategori halaman
    Route::get('/kategorihalamans', [App\Http\Controllers\Api\Web\KategorihalamanController::class, 'index']);

    //kategori halaman sidebar
    Route::get('/kategorihalamanSidebar', [App\Http\Controllers\Api\Web\KategorihalamanController::class, 'kategorihalamanSidebar']);
	
    //show kategori halaman
    Route::get('/kategorihalamans/{slug}', [App\Http\Controllers\Api\Web\KategoriberitaController::class, 'show']);

});



