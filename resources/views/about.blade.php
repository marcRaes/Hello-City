@extends('layout')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    <img src="{{ asset('images/tdn_logo.png') }}" alt="TDN Logo">

    <p>Built with &hearts; by LES TEACHERS DU NET</p>

    <p><a href="{{ route('app_home') }}">Revenir à la page d'accueil</a></p>
@endsection
