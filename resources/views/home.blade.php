@extends('layouts.master')

@section('title', 'Tecnología para tu negocio')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection