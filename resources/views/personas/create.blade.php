@extends('layout/temple')

@section('title','Registrar Personas')

@section('contenido')

<main>
    <!--Registrar Personas-->         
                <div class="container my-5  bg-info border border-2 rounded" >
                    <h2 class="fw-bold ">Registrar personas</h2>
                    <hr>

                    @if ($errors->any())

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>

                    @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>  
                    @endforeach

                    </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                    @endif

               {{-- Esto hace que por el metodo post me envie los datos a operarios --}}     
                    <form action="{{url('personas')}}" method="post"  class="">
                        @csrf  {{-- Con esto trabajamos las seguridad ocultando los elementos(Lo que se envi) --}}

                            <div class="mb-3 row">
                                <label for="documento" class=" col-form-label">Documento:</label>
                                <!-- los old nos sirven para que cuando hayga un error no se borren los datos que ya hemos escrito  maxlength="10" -->
                                <div class="col-sm-5">
                                <input type="text" class="form-control" name="documento" id="documento" value="{{ old('documento') }}" required>
                                </div>                     
                            </div> 

                            <div class="mb-3 row">
                                <label for="nombre" class=" col-form-label">Nombre:</label>
                                <div class="col-sm-5">
                                <input type="text"  class="form-control" name="nombre" id="nombre" " value="{{ old('nombre') }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nombre" class=" col-form-label">Correo:</label>
                                <div class="col-sm-5">
                                <input type="text"  class="form-control" name="correo" id="correo" " value="{{ old('correo') }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="direccionResidencia" class=" col-form-label">Direccion:</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control" name="direccionResidencia" id="direccionResidencia" value="{{ old('direccionResidencia') }}" required>
                                </div>
                            </div>
                       
                            <div class="mb-3 row">
                                <label for="estrato" class="col-form-label">Estrato:</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control " name="estrato" id="estrato" value="{{ old('correo') }}" required >
                                </div>
                            </div>


                            <input type="submit" value="Enviar" class="btn btn-primary">
                            <a href="{{ url('personas') }}" class="btn btn-secondary">Regresar</a>

                                      
                    </form>
            </div>
</main>

