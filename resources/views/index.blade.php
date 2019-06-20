@extends('layouts.principal')

@section('title','Bragado Cicles')

@section('content')

    <!-- Navigation -->
    @include('navPrincipal')
    
    <!-- Header -->
    @include('header')

    <!-- Portfolio -->
    @include('sponsor')

    <!-- About -->
    @include('about')

    {{-- notas --}}

    @include('notas')

    <!-- Services -->
    @include('atletas')

    <!-- Map -->
    @include('contact')

    <!-- Footer -->
    @include('footer')


@endsection
