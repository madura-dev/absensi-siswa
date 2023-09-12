<?php

use App\Http\Livewire\ShowMajor;
use App\Http\Livewire\Courses\Showcourses;
use App\Http\Livewire\Courses\AddCourses;
use App\Http\Livewire\Courses\UpdateCourses;

use App\Http\Livewire\Teachers\Create;
use App\Http\Livewire\Teachers\Edit;
use App\Http\Livewire\Teachers\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/jurusan', ShowMajor::class)->name('jurusan');
Route::get('/edit/{id}', UpdateCourses::class)->name('courses.edit');
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
        Route::get('/{teachers}/edit', Edit::class)->name('teacher.edit');

    });
    Route::group(['prefix' => 'mapel'], function () {
        Route::get('/', Showcourses::class)->name('courses.index');
        Route::get('/create', AddCourses::class)->name('courses.create');

    });
});

