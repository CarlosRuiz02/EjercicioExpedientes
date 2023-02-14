@extends('layouts.plantillabase');

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
@endsection




@section('contenido')
<a href="expedientes/create" class="btn btn-primary"> Añadir </a>



<table id="expedientes" class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Archivo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Tipo</th>
            <th scope="col">Expediente</th>
            <th scope="col">Autor</th>
            <th scope="col">Documento</th>
        </tr>
    </thead>
    <tbody>
        @foreach($expedientes as $expediente)
        <tr>
            <td>{{$expediente->archivo}}</td>
            <td>{{$expediente->fecha}}</td>
            <td>{{$expediente->tipo}}</td>
            <td>{{$expediente->expediente}}</td>
            <td>{{$expediente->autor}}</td>
            <td>{{$expediente->documento}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#expedientes').DataTable({
            "lengthMenu": [[5,10,50, -1], [5,10,15, "All"]]
        });
    });
</script>
@endsection


@endsection