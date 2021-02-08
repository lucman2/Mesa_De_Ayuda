@extends('app')
@section('content')
    <x-panelTecnico-layout>
        <x-slot name="nav">
            <x-panelTecnico-navigation>
            </x-panelTecnico-navigation>
        </x-slot>
        <x-slot name="content">
            <x-panelTecnico-content :solicitudes="$solicitudes">
            </x-panelTecnico-content>
        </x-slot>
    </x-panelTecnico-layout>
@endsection