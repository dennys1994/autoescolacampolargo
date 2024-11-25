@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>AVALIAÇÃO E TREINAMENTO<br>
                    DE MOTORISTAS</strong></h2>
            </div>
        </div>
    </section>
    <section id="treinamento">
        <div class="container">            
            <div class="row d-flex justify-content-around">
                <!-- Primeira Coluna -->
                <div class="col-12" id="title-treinamento">
                    <h1>Avaliação e Treinamento de Motoristas</h1>
                    <p>Por meio deste serviço, avaliamos candidatos a motorista, identificando o profissional com o perfil mais adequado para exercer a função com excelência.</p>
                </div>                                 
                <div class="col-12 text-center mt-4">
                    <button class="btn">Faça sua<strong>&nbspmatrícula</strong></button>                            
                </div>          
            </div>
        </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/treinamento.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush