@extends('admin.layouts.app')

@section('title','Cadastro de Usuários')

@section('content')
    <h1>Novo Usuário</h1>
    {{-- @include('admin.includes.errors') --}}
    <form action="{{ route('users.store') }}" method="POST">
        <!-- <input type="text" name="_token" value="{{ csrf_token() }}"> /*Uma forma mais elegante é utilizando apenas @csrf(), que irá criar o um campo hidden*/-->        
        @include('admin/users/partials.form')
    </form>

@endsection