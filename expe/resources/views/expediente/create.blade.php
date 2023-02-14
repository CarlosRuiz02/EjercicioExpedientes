@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear expedientes</h2>
<form action="/expedientes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class=form-label>Archivo</label>
        <input id="archivo" name="archivo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class=form-label>Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class=form-label>Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class=form-label>Expediente</label>
        <input id="expediente" name="expediente" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class=form-label>Autor</label>
        <input id="autor" name="autor" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class=form-label>Documento</label>
        <input id="documento" name="documento" type="file" class="form-control" tabindex="6">
    </div>
    <a href="/expedientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>


</form>

@endsection
