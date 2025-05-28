@extends('admin.layouts.app')

@section('title','Cadastro de Usuários')

@section('content')

    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        <!-- <input type="text" name="_token" value="{{ csrf_token() }}"> /*Uma forma mais elegante é utilizando apenas @csrf(), que irá criar o um campo hidden*/-->
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

@endsection