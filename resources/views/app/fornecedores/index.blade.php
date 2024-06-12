<h3>Fornecedor</h3>

@php
/*
    if(empty($variavel)){}
*/
@endphp

@isset($fornecedores)
    @for($i = 0; $i < count($fornecedores); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status'] }}
        <br />
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? ''}}
        <br />
        <hr />
        <br />
    @endfor
@endisset