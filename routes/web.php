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
    return view('bemVindo');
});

Route::get('/pessoas/nome_simples', function () {
    $pessoa = criarPessoa('Eduardo', 'Silva');
    return view('nomeSimples', ['nome' => $pessoa->nome]);
});

Route::get('/pessoas/nome_completo', function () {
    $pessoa = criarPessoa('Matheus', 'Moreira');
    return view('nomeCompleto', ['nome' => call_user_func($pessoa->nomeCompleto, $pessoa)]);
});

function criarPessoa($nome, $sobrenome){
    $pessoa = (object)[];

    $pessoa->nome = $nome;
    $pessoa->sobrenome = $sobrenome;
    
    $pessoa->nomeCompleto = function($pessoa){
        $nomeCompleto = $pessoa->nome . ' ' . $pessoa->sobrenome;
        return $nomeCompleto;
    };
    
    return $pessoa;
}