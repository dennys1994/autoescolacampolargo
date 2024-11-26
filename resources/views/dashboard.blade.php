@extends('layouts.app2')
@section('title', 'Dashboard - Autoescola')

@section('content') 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Você está logado!") }}
                </div>
                <!-- Botões para as seções -->
                <div class="mt-6">
                    <a href="{{ route('contato.lista') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Ver Lista de Preenchimento do Formulário
                    </a>
                </div>
                <div class="mt-4">
                    <a href="{{ route('pre-matricula.lista') }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-semibold text-sm rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Ver Pré-Matrículas
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
