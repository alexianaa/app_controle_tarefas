<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tarefa',App\Http\Controllers\TarefaController::class); //->middleware('auth');

Route::get('mensagem-teste', function() {
    Mail::to('kpopermoomoo@gmail.com')->send(new MensagemTesteMail());
    return 'email enviado com sucesso';
});

Route::get('mensagem-view-teste', function() {
    return new MensagemTesteMail();
});