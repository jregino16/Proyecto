@extends('layout/temple')

@section('title','Registrar personas')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
    </div>
    <a href="{{url('personas')}}" class="btn btn-secondary">Regresar</a>
</main>