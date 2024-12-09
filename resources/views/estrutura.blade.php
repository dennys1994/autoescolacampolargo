@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-title">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>ESTRUTURA</strong></h2>
            </div>
        </div>
    </section>
    <section id="estrutura">
        <div class="container">
            <div class="row">
                <div class="col-12 fundo-elemento">
                    <div class="row d-flex align-items-stretch">
                        <!-- Primeira Coluna -->
                        <div class="col-12 col-md-7 d-flex align-items-center justify-content-center">
                            <ul>
                                <li>Instrutores credenciados pelo DETRAN/PR;</li>
                                <li>Frota de veículos novos;</li>
                                <li>Sala de aula climatizada;</li>
                                <li>Pista de moto igual à do DETRAN e bem localizada;</li>
                                <li>Horários flexíveis;</li>
                                <li>Acompanhamento personalizado para quem tem medo de dirigir;</li>
                                <li>Sala de espera confortável sempre com um cafezinho à disposição.</li>
                            </ul>
                        </div>

                        <!-- Segunda Coluna -->
                        <div class="col-12 col-md-5">
                            <div id="carouselestrutura" class="carousel slide w-100 h-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 h-100" src="{{asset('img/estrutura/estrutura-1.png')}}" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route ("pre_matricula")}}"class="btn">Faça sua<strong>&nbspmatrícula</strong></a>
            </div>
        </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estrutura.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush