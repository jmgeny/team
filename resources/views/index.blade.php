@extends('layouts.principal')

@section('title','Bragado Cicles')

@section('content')

    <!-- Navigation -->
    @include('navprincipal')
    
    <!-- Header -->
    @include('header')

    {{-- notas --}}

    @include('notas')

    <!-- Services -->
    @include('atletas')

    <!-- Portfolio -->
    @include('sponsor')

    <!-- About -->
    @include('nosotros')

    <!-- Map -->
    @include('contact')

    <!-- Footer -->
    @include('footer')


@endsection
