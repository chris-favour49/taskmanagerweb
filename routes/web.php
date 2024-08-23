<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskManagerController;

// Dashboard
Route::get( '/dashboard', [ DashboardController::class, 'index' ] )->name( 'dashboard' );
// Task Manager
Route::get( '/tasks', [ TaskManagerController::class, 'index' ] )->name( 'tasks' );
Route::post( '/savetask', [ TaskManagerController::class, 'savetask' ] )->name( 'savetask' );
Route::get( '/edittask/{id}', [ TaskManagerController::class, 'edittask' ] )->name( 'edittask' );
Route::get( '/deletetask/{id}', [ TaskManagerController::class, 'deletetask' ] )->name( 'deletetask' );
Route::post( '/updatetask', [ TaskManagerController::class, 'updatetask' ] )->name( 'updatetask' );
Route::get( '/alltasks', [ TaskManagerController::class, 'alltasks' ] )->name( 'alltasks' );
Route::get( '/viewtasks/{id}', [ TaskManagerController::class, 'viewtasks' ] )->name( 'viewtasks' );
