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
                'cnpj' => '00000000000001',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'
            ],
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
