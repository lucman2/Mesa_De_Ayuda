@extends('app')
@section('content')
<x-panelEncargado-layout>
    <x-slot name="nav">
        <x-panelEncargado-navigation-equipo>
        </x-panelEncargado-navigation-equipo>
    </x-slot>
    <x-slot name="content">
        <x-panelEncargado-content-equipo :equipos="$equipos">
        </x-panelEncargado-content-equipo>
    </x-slot>
</x-panelEncargado-layout>
@endsection