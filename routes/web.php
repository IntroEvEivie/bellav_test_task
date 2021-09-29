<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/new-task', function () {
    return view('new-task');
})->name('new-task');

Route::get('/tasks/{id}/delete',
   [ TasksController::class,
    'deleteTask'])->name('task-delete');

Route::get('/tasks',
 [TasksController::class,
  'allData'])->name('tasks');



  Route::get('/tasks/{id}',
   [ TasksController::class,
    'edit' ])->name('edit-task');

  Route::post('/new-task',
     [ TasksController::class,
      'newTask' ])->name('new-task');

  Route::post('/tasks/{id}',
      [ TasksController::class,
       'updateTaskSubmit' ])->name('edit-task-submit');

Route::name('user.')->group(function(){
  Route::view('/private', 'private')->middleware('auth')->name('private');

Route::get('/login', function(){
    if(Auth::check()){
      return redirect(route('user.private'));
    }
    return view('login');
  })->name('login');

  Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

  Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
  })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
          return redirect(route('user.private'));
        }
        return view('registration');
      })->name('registration');

  Route::post('/registration',
   [\App\Http\Controllers\RegisterController::class,
    'save']);


});
