<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

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
