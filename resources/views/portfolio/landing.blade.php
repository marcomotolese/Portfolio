@extends('layouts.app')

@section('title', 'Portfolio — Marco Motolese')

@section('content')
    @if (session('status'))
        <div class="mx-auto mt-4 max-w-6xl px-6 lg:px-8">
            <div class="rounded-xl bg-emerald-50 px-4 py-3 text-xs text-emerald-800 ring-1 ring-emerald-200">
                {{ session('status') }}
            </div>
        </div>
    @endif

    {{-- Hero principale --}}
    <x-hero-primary />

    {{-- Sezione "Chi sono" --}}
    <x-about-section />

    {{-- Progetti selezionati --}}
    <x-projects-section />

    {{-- Competenze raggruppate --}}
    <x-skills-section />

    {{-- Contatti --}}
    <x-contact-section />

@endsection

