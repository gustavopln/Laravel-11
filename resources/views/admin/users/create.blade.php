@extends('admin.layouts.app')

@section('title','Cadastro de Usuários')

@section('content')

    <h1>Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        <!-- <input type="text" name="_token" value="{{ csrf_token() }}"> /*Uma forma mais elegante é utilizando apenas @csrf(), que irá criar o um campo hidden*/-->
        @csrf()
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

@endsection