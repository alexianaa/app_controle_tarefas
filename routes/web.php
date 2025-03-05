<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::resource('tarefa',App\Http\Controllers\TarefaController::class)->middleware('verified');

Route::get('mensagem-teste', function() {
    Mail::to('kpopermoomoo@gmail.com')->send(new MensagemTesteMail());
    return 'email enviado com sucesso';
});

Route::get('mensagem-view-teste', function() {
    return new MensagemTesteMail();
});
