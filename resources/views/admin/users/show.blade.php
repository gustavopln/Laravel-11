@extends('admin.layouts.app')

@section('title','Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>  
    
    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>
    <x-alert/>

    <!-- @can('is-owner', $user)
        Pode deletar
    @endcan -->
    
    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Deletar</button>
    </form>
    @endcan
@endsection