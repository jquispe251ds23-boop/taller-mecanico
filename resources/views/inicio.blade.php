@extends('layouts.app')

@section('Taller Mecánico', 'Inicio')

@section('contenido')
    <h1>Sistema de Gestión de Reparaciones e Inventario - Taller Mecánico</h1>
    <p>Proyecto base funcionando con Laravel {{ app()->version() }}.</p>
    <p>Base de datos conectada:
        <strong>{{ DB::connection()->getDatabaseName() }}</strong>
    </p>
@endsection