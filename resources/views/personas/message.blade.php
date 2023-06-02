@extends('layout/temple')

@section('title','Registrar personas')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{url('personas')}}" class="btn btn-secondary">Regresar</a>
    </div>
   
</main>