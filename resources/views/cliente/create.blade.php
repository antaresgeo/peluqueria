@extends('layouts.new.card')

@section('title', 'Nuevo Cliente ')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('cliente.index') }}">Clientes</a>
    </li>
    <li class="breadcrumb-item active">Nuevo Cliente</li>
</ol>
@endsection

@section('header')
<i class="fa fa-pencil" aria-hidden="true"></i>
<span>Nuevo Cliente</span>
@endsection

@section('body')
{!! Form::open(['route' => 'cliente.store', 'method' => 'POST']) !!}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono', 'Número Telefónico') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'required', 'placeholder' => '111xxx']) !!}
</div>
<div class="form-group">
    {!! Form::label('identificacion', 'DNI') !!}
    {!! Form::text('identificacion', null,['class' => 'form-control', 'placeholder' => '111xxx']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Correo electrónico') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
</div>
{{-- <div class="form-group">
    {!! Form::label('localidad', 'Localidad') !!}
    {!! Form::text('localidad', null,['class' => 'form-control', 'required' , 'placeholder' => 'localidad']) !!}
</div> --}}
<div class="form-group">
    {!! Form::label('datetimepicker10', 'Fecha de nacimiento') !!}
    <div class="input-group date">
        <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
        </span>
        {!! Form::text('facha_nacimiento', null,['class' => 'form-control', 'readonly', 'id' => 'datetimepicker10']) !!}
    </div>
</div>
{{-- <div class="form-group">
    {!! Form::label('ocupacion', 'Ocupación') !!}
    {!! Form::text('ocupacion', null,['class' => 'form-control', 'required' , 'placeholder' => 'ocupación']) !!}
</div> --}}
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cliente.index') }}" class="btn btn-primary">Cancelar</a>
</div>
{!! Form::close() !!}
@endsection

@push('scripts')
<script>
    $(function() {
        $('#datetimepicker10').datepicker({
            format: 'yyyy-mm-dd',
            language:  'es'
        });
    });
</script>
@endpush
