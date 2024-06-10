<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '11',
                'telefone' => '123456789'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => 'abc',
                'ddd' => '85',
                'telefone' => '123456789'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => 'abc',
                'ddd' => '',
                'telefone' => '123456789'
            ],
        ];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
