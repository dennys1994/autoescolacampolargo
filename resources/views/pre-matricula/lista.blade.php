@extends('layouts.app2')

@section('title', 'Lista de Contatos')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Lista de Preenchimento do Formulário de Contato</h2>
                    <!-- Exemplo de tabela com dados -->
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Mensagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aqui você renderiza os dados -->
                            <!-- Exemplo estático -->
                            <tr>
                                <td>João Silva</td>
                                <td>joao@example.com</td>
                                <td>Gostaria de saber mais sobre os cursos.</td>
                            </tr>
                            <tr>
                                <td>Maria Oliveira</td>
                                <td>maria@example.com</td>
                                <td>Tenho interesse nas aulas de direção.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
