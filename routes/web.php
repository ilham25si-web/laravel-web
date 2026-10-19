<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

use App\http\Controllers\DashboardController;

use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama/{ilham}', function ($ilham){
    return 'Nama saya: '.$ilham;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301079') {
    return 'NIM saya: '.$param1;
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/home/{id}', [HomeController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

        route::get('/home-question-respon', function (){
            return view ('home-question-respon');
        })->name('home-question-respon');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
