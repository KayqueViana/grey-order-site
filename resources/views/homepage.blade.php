@extends('layouts.main')

@section('title', 'Homepage')
@section('content')
<style>
    .background-fit{
        background-color: goldenrod;
    }    
</style>

<div>
    <h1>Página Inicial</h1>
</div>
    <div>
        <a href="#">
            Cadastrar 
        </a>
        <a href="#">
            Entrar
        </a>
    </div>
    <div style="font-size: 15px;color: rgb(59, 59, 59)59, 59, 59)">
        Um antigo mal se aproxima, junte-se a nós nobre guerreiro das cinzas
    </div>
@endsection