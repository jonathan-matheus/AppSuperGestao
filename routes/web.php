<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get(
    '/',
    [PrincipalController::class, 'principal']
);

Route::get(
    '/sobre-nos',
    [SobreNosController::class, 'sobreNos']
);

Route::get(
    '/contato',
    [ContatoController::class, 'contato']
);

Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - Informação
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
