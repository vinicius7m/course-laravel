<?php

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
    $helloWorld = 'Hello World';
    # compact que faz uma array com os valores procurando o nome e valor (que é impresso)

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function() {

    // \App\User::all() - Retorna todos os usuários 
    // \App\User::find(1) - Retorna um usuário
    // \App\User::where('name','email')

    // return \App\User::all();

    // return \App\User::where('name','Katherine Kovacek')->first(); -- primeiro
    // select * from users where name = "Vinicius"
    return \App\User::paginate(10);
});