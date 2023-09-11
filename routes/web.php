<?php

use App\Http\Livewire\ShowMajor;
use App\Http\Livewire\Teachers\Create;
use App\Http\Livewire\Teachers\Edit;
use App\Http\Livewire\Teachers\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/jurusan', ShowMajor::class)->name('jurusan');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'guru'], function () {
        Route::get('/', Index::class)->name('teacher.index');
        Route::get('/create', Create::class)->name('teacher.create');
        Route::get('/{teacher}/edit', Edit::class)->name('teacher.edit');

    });
});
