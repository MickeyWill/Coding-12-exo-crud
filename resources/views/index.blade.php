@extends('layouts.index')

{{-- Mettre toutes les sections --}}

@section('content')
    @include('templates.hero')
    @include('templates.intro')
    @include('templates.about')
    @include('templates.service')
    @include('templates.subscribe')
    @include('templates.portfolio')
    @include('templates.testimonial')
    @include('templates.team')
    @include('templates.contact')
    @include('templates.footer')
@endsection