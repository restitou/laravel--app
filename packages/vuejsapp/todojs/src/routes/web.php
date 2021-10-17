<?php

namespace Vuejsapp\Todojs;

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
// The root uri of applicatio


Route::get('/test', 'Vuejsapp\Todojs\TodoItemsController@index')->name('showTodosPage2');
Route::get('/todos2', 'Vuejsapp\Todojs\TodoItemsController@todos')->name('loadTodos2');
Route::post('/todos2', 'Vuejsapp\Todojs\TodoItemsController@store')->name('storeTodos2');
Route::put('/todos2/{todoItem}', 'Vuejsapp\Todojs\TodoItemsController@update')->name('updateTodo2');
Route::delete('/todos2/{todoItem}', 'Vuejsapp\Todojs\TodoItemController@destroy')->name('deleteTodo2');

?>