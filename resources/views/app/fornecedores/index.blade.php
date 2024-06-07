<h3>Fornecedor</h3>

@php
/*
    if(){

    }else if(){

    } else {
        
    }
*/
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Foram encontrados muitos fornecedores</h3>
@else
    <h3>Nenhum fornecedor encontrado</h3>
@endif