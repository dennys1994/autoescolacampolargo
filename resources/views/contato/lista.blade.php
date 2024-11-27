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
                        <th scope="col" class="px-6 py-3">Serviço</th>
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
                            <td class="px-6 py-4">
                                <a href="https://wa.me/55{{$contato->telefone}}" target="_blank" class="text-primary email-link" style="cursor: pointer;"> 
                                    {{ $contato->telefone }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="mailto:{{ $contato->email }}?subject=Assunto%20do%20Email&body=Mensagem%20do%20email" class="text-primary email-link" 
                                    style="cursor: pointer;">
                                    {{ $contato->email }}
                                </a>
                            </td>
                            <td class="px-6 py-4">{{ $contato->servico }}</td>
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
<style>
    .email-link {
        text-decoration: none; /* Remove o sublinhado padrão */
        transition: color 0.3s ease, transform 0.2s ease; /* Suaviza a transição de cor e animação */
    }

    .email-link:hover {
        color: #0056b3; /* Cor do link quando o mouse está sobre ele (um tom mais escuro de azul) */
        transform: scale(1.05); /* Aumenta levemente o tamanho do link */
    }
</style>
@endsection



@push('styles')
    <link href="{{ asset('css/dashboard/contato.css') }}" rel="stylesheet">
@endpush