<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/installation-process', function () {  return view('process.installation-process');  })->name('installation-process');
Route::get('/app-running-process', function () {  return view('process.app-running-process');  })->name('app-running-process');
Route::get('/template-syntax-process', function () {  return view('process.template-syntax-process');  })->name('template-syntax-process');
Route::get('/computed-properties-process', function () {  return view('process.computed-properties-process');  })->name('computed-properties-process');
Route::get('/style-binding-process', function () {  return view('process.style-binding-process');  })->name('style-binding-process');
Route::get('/class-binding-process', function () {  return view('process.class-binding-process');  })->name('class-binding-process');
Route::get('/conditional-rendering-process', function () {  return view('process.conditional-rendering-process');  })->name('conditional-rendering-process');
Route::get('/list-rendering-process', function () {  return view('process.list-rendering-process');  })->name('list-rendering-process');
Route::get('/event-handling-process', function () {  return view('process.event-handling-process');  })->name('event-handling-process');
Route::get('/form-input-binding-process', function () {  return view('process.form-input-binding-process');  })->name('form-input-binding-process');
Route::get('/lifecycle-hooks-process', function () {  return view('process.lifecycle-hooks-process');  })->name('lifecycle-hooks-process');
Route::get('/watchers-process-process', function () {  return view('process.watchers-process');  })->name('watchers-process');
Route::get('/template-refs-process', function () {  return view('process.template-refs-process');  })->name('template-refs-process');
Route::get('/component-basics-process', function () {  return view('process.component-basics-process');  })->name('component-basics-process');
