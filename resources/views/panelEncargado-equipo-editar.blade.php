@extends('app')
@section('content')
<x-panelEncargado-layout>
    <x-slot name="nav">
        <x-panelEncargado-navigation>
        </x-panelEncargado-navigation>
    </x-slot>
    <x-slot name="content">
        <x-panelEncargado-content-equipo-editar :equipo="$equipo">
        </x-panelEncargado-content-equipo-editar>
    </x-slot>
</x-panelEncargado-layout>
@endsection