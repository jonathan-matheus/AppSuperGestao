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

Route::get('/login', function () {
    return 'Login';
});

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    });

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    });

    Route::get('/produtos', function () {
        return 'Produtos';
    });
});
