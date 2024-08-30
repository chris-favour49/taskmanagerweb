<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\UsersController;

// Dashboard
Route::get( '/dashboard', [ DashboardController::class, 'index' ] )->name( 'dashboard' );

// Task Manager
Route::get( '/tasks', [ TaskManagerController::class, 'index' ] )->name( 'tasks' );
Route::post( '/savetask', [ TaskManagerController::class, 'savetask' ] )->name( 'savetask' );
Route::get( '/edittask/{id}', [ TaskManagerController::class, 'edittask' ] )->name( 'edittask' );
Route::get( '/deletetask/{id}', [ TaskManagerController::class, 'deletetask' ] )->name( 'deletetask' );
Route::post( '/updatetask', [ TaskManagerController::class, 'updatetask' ] )->name( 'updatetask' );

// Users
Route::get( '/users', [ UsersController::class, 'index' ] )->name( 'users' );
Route::post( '/saveuser', [ UsersController::class, 'saveuser' ] )->name( 'saveuser' );
Route::get( '/edituser/{id}', [ UsersController::class, 'edituser' ] )->name( 'edituser' );
Route::get( '/deleteuser/{id}', [ UsersController::class, 'deleteuser' ] )->name( 'deleteuser' );
Route::post( '/updateuser', [ UsersController::class, 'updateuser' ] )->name( 'updateuser' );

// Project Manager
Route::get( '/projects', [ ProjectTaskController::class, 'index' ] )->name( 'projects' );
Route::post( '/saveproject', [ ProjectTaskController::class, 'saveproject' ] )->name( 'saveproject' );
Route::get( '/edittask/{id}', [ TaskManagerController::class, 'edittask' ] )->name( 'edittask' );
Route::get( '/deletetask/{id}', [ TaskManagerController::class, 'deletetask' ] )->name( 'deletetask' );
Route::post( '/updatetask', [ TaskManagerController::class, 'updatetask' ] )->name( 'updatetask' );
Route::get( '/viewproject', [ ProjectTaskController::class, 'viewproject' ] )->name( 'viewproject' );
