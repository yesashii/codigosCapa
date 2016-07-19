@extends('layouts.master')

@section('titulo', 'Un título')


@section('sidevar')
    @@parent
    <p> this is append to the main sidevar</p>
@endsection

@section('contend')
    <p> this is my body contend.</p>
@endsection
