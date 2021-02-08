@extends('app')
@section('content')
    <x-panelEncargado-layout>
        <x-slot name="nav">
            <x-panelEncargado-navigation></x-panelEncargado-navigation>
        </x-slot>
        <x-slot name="content">
            <x-panelEncargado-content :solicitudes="$solicitudes"></x-panelEncargado-content>
        </x-slot>
    </x-panelEncargado-layout>
    
@endsection