@extends('layout/temple')

@section('title','personas')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')


    
<main style="background-color:#f7f7f5">
    <a href="{{url('personas/create')}}" class="btn btn-info my-3">Crear Personas</a>


 
    
    <div class="card" style="border: 1px solid">
        <div class="card-body">


    <table class="table table-striped  table-bordered" id="personas">
        <thead>
        <tr>
            <th>id</th>
            <th>documento</th>
            <th>nombre</th>
            <th>correo</th>
            <th>direccion</th>
            <th>estrato</th>
        </tr>
        </thead>
        <tbody>
            <!-- Aqui es donde se pasa toda de la variable que estaba en el conrolador en persona y me muestras su id, documento, nombre etc-->
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->documento }}</td>                    
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->correo }}</td>                    
                <td>{{ $persona->direccionResidencia }}</td>                    
                <td>{{ $persona->estrato }}</td>                    

                                       
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
   
        $('#personas').DataTable({

            "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por pagina",
            "zeroRecords": "Nada encontrado - Disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de  _MAX_ Registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next': 'Siguiente',
                'previous': 'Anterior'

            }
        }



        });

    </script>
 

    @endsection



</main>