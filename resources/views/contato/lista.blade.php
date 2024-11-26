<!-- resources/views/contato/lista.blade.php -->
@extends('layouts.app2')

@section('title', 'Lista de Contatos')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nome</th>
                        <th scope="col" class="px-6 py-3">Telefone</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Data</th>
                        <th scope="col" class="px-6 py-3">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contatos as $contato)
                        <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $contato->nome }}
                            </td>
                            <td class="px-6 py-4">{{ $contato->telefone }}</td>
                            <td class="px-6 py-4">{{ $contato->email }}</td>
                            <td class="px-6 py-4">{{ $contato->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4">
                                <!-- Formulário de exclusão -->
                                <form action="{{ route('contato.destroy', $contato->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Deletar</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection



@push('styles')
    <link href="{{ asset('css/dashboard/contato.css') }}" rel="stylesheet">
@endpush