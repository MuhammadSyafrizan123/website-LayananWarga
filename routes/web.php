<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratpengajuanController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\AgendaController;
use App\Models\datapenduduk;
use Dompdf\Dompdf;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/dashboard', function () {
    $datapenduduks = datapenduduk::count();
    return view('dashboard', compact('datapenduduks'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/janjitemu', function () {
    return view('janjitemu');
})->middleware(['auth', 'verified'])->name('janjitemu');

Route::get('/datapenduduk',[DatapendudukController::class,'index'])->middleware(['auth','verified'])->name('datapenduduk');

Route::get('/tampilkandata/{id}',[DatapendudukController::class,'tampilkandata'])->middleware(['auth','verified'])->name('tampilkandata');

Route::post('/updatedata/{id}',[DatapendudukController::class,'updatedata'])->middleware(['auth','verified'])->name('updatedata');

Route::get('/delete/{id}',[DatapendudukController::class,'delete'])->middleware(['auth','verified'])->name('delete');

Route::get('/exportpdf',[DatapendudukController::class,'exportpdf'])->middleware(['auth','verified'])->name('exportpdf');


Route::get('/datapenduduk/search', 'DatapendudukController@search')->name('datapenduduk.search');



Route::get('/dashboard',[DatapendudukController::class,'dashboard'])->middleware(['auth','verified'])->name('dashboard');

Route::get('/tambahdata',[DatapendudukController::class,'tambahdata'])->middleware(['auth','verified'])->name('tambahdata');

Route::post('/masukdata',[DatapendudukController::class,'masukdata'])->middleware(['auth','verified'])->name('masukdata');

Route::get('datapenduduk/{groupId}', 'DatapendudukController@datapenduduk');


Route::get('/pengajuan', [SuratpengajuanController::class,'pengajuan'] 
)->middleware(['auth', 'verified'])->name('pengajuan');

Route::get('/agenda', [AgendaController::class,'index'] 
)->middleware(['auth', 'verified'])->name('agenda');


Route::get('/', [AgendaController::class,'index2'] 
)->name('welcome');

Route::get('/status',[SuratpengajuanController::class,'index2'])->middleware(['auth','verified'])->name('status');

Route::get('/lihatsuratpengajuan/{id}', [SuratpengajuanController::class,'lihatsuratpengajuan'] 
)->middleware(['auth', 'verified'])->name('lihatsuratpengajuan');

Route::get('/tambahagenda', [AgendaController::class,'tambahagenda'] 
)->middleware(['auth', 'verified'])->name('tambahagenda');

Route::post('/agendabaru', [AgendaController::class,'agendabaru'] 
)->middleware(['auth', 'verified'])->name('agendabaru');

Route::get('/tampilkanagenda/{id}', [AgendaController::class,'tampilkanagenda'] 
)->middleware(['auth', 'verified'])->name('tampilkanagenda');

Route::post('/updateagenda/{id}', [AgendaController::class,'updateagenda'] 
)->middleware(['auth', 'verified'])->name('updateagenda');

Route::get('/delete/{id}', [AgendaController::class,'delete'] 
)->middleware(['auth', 'verified'])->name('delete');

Route::get('/agenda/search', 'AgendaController@search')->name('agenda.search');







Route::get('/bantuan', function () {
    return view('bantuan');
})->middleware(['auth', 'verified'])->name('bantuan');






Route::get('/suratpengajuans',[SuratpengajuanController::class,'index'])->name('suratpengajuan');

Route::get('/pengajuanlanjut',[SuratpengajuanController::class,'index'])->name('pengajuanlanjut');

Route::post('/insertdata',[SuratpengajuanController::class,'insertdata'])->name('insertdata');

Route::get('/data','dataController@index');
Route::get('/pengajuan',[SuratpengajuanController::class,'pengajuan'])->name('pengajuan');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'user-role:admin'])->group (function ()
{
Route::get("/admin", [HomeController::class, 'adminHome'])->name('admin');
});

require __DIR__ . '/auth.php';

// reference the Dompdf namespace


