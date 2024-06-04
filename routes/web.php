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
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function (
        string $nome = 'Desconhecido',
        string $categoria = 'Informação',
        string $assunto = 'Contato',
        string $mensagem = 'Mensagem não informada'
    ) {
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
    }
);
