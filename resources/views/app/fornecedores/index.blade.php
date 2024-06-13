<h3>Fornecedor</h3>

@php
/*
    if(empty($variavel)){}
*/
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor) 
        Iteração atual: {{ $loop->iteration}}
        <br />
        Fornecedor: @{{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? ''}}
        <br />
        @if ($loop->first)
            Primeiro iteração do loop
        @endif
        @if ($loop->last)
            Último iteração do loop
            
            <br />
            Total de registros: {{ $loop->count }}
        @endif
        <hr />
        <br />
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset