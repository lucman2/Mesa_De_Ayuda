@extends('app')
@section('content')
<x-panelTecnico-layout>
    <x-slot name="nav">
        <x-panelTecnico-navigation>
        </x-panelTecnico-navigation>
    </x-slot>
    <x-slot name="content">
        <x-panelTecnico-content-editar :solicitud="$solicitud">
        </x-panelTecnico-content-editar>
    </x-slot>
</x-panelTecnico-layout>
@endsection