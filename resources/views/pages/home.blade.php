@extends('layout.layout')
@section('title', 'Accueil')
    
@section("content")

  @include('partials/homepage/_hero')
  @include('partials/homepage/_recharge')
  @include('partials/homepage/_modeles')
  @include('partials/homepage/_modeles-recharge')
  @include('partials/homepage/_pourquoi')
  @include('partials/homepage/_fin-page')


@endsection