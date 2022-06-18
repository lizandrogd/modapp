
@extends('layouts.layout')


@section('header')
    Inicio
@endsection

@section('icon')
<a href="{{url('search')}}" class="m-auto">
<button class="m-auto" >    
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
</svg>
</button>
</a>


@endsection

@section('cuerpo')


@livewire('pagina-principal')


    
@endsection

