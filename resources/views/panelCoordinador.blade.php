@extends('app')
@section('content')
<x-panelCoordinador-layout>
    <x-slot name="nav">
        <x-panelCoordinador-navigation>
        </x-panelCoordinador-navigation>
    </x-slot>
    <x-slot name="content">
        <x-panelCoordinador-content :solicitudes="$solicitudes">
        </x-panelCoordinador-content>
    </x-slot>
</x-panelCoordinador-layout>
@endsection