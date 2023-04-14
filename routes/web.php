<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ordenadores.test => welcome
//ordenadores.test/contacto => contact
//ordenadores.test/blog => blog
//ordenadores.test/about => about

/*Route::get('/', function () {   '/' significa la raíz
    return view('welcome');
});*/

//Route::view('/', 'welcome');
Route::view('/', 'index')->name('index');
Route::view('/contact', 'contact')->name('contacto');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');

/*Si quiero que responda a x peticiones necesito:
Route::match(['put', 'patch'], '/', function()){
*/

/*Para responder a todo tipo de peticiones necesito
Route::any('/', function()){

}*/
