@extends('layouts.app2')

@section('title', 'Lista de Pré-Matrículas')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Lista de Pré-Matrículas</h2>
                    <!-- Tabela com os dados -->
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Nome</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Telefone</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Email</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Categoria</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Anexos</th>
                                <th class="px-6 py-3 border-b-2 border-gray-200 text-left">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prematriculas as $prematricula)
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $prematricula->nome }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $prematricula->telefone }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $prematricula->email }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">{{ $prematricula->categoria }}</td>
                                    <td class="px-6 py-4 border-b border-gray-200">
                                        @foreach(json_decode($prematricula->anexos) as $anexo)
                                            <a href="{{ asset('storage/' . $anexo) }}" target="_blank" class="text-blue-600 hover:underline" download>
                                                <i class="fa fa-download"></i> Download do Anexo
                                            </a>                                        
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-200">
                                        <form action="{{ route('prematricula.delete', $prematricula->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

