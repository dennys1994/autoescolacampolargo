@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>INCLUSÃO DE CATEGORIA</strong></h2>
            </div>
        </div>
    </section>
    <section id="inclusao">
        <div class="container">            
            <div class="row  d-flex justify-content-around">
                <!-- Primeira Coluna -->
                <div class="col-12">
                    <h1>Inclusão de Categoria</h1>
                    <p>Oferecemos cursos para quem já possui habilitação e deseja adicionar outra categoria. Não é necessário realizar aulas teóricas para a mudança de categoria, facilitando o processo.</p>
                </div>
                 <!-- Card 1 -->
                <div class="col-8">
                    <div class="container">            
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <div class="card-body d-flex align-items-center">
                                        <i><img src="{{asset ('img/icons/exame.png')}}" alt="" srcset=""></i>
                                        <p class="mb-0">EXAMES DE APTIDÃO FÍSICA E MENTAL</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-4">
                                <div class="card text-center" style="background: #890004">
                                    <div class="card-body d-flex align-items-center">
                                        <i><img src="{{asset ('img/icons/clock.png')}}" alt="" srcset=""></i>
                                        <p class="mb-0">AULAS TEÓRICAS<br>42 horas/aula</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fa-solid fa-book fa-3x fa-invisible" style="visibility: hidden;"></i>
                                        <p class="mb-0">AULAS PRÁTICAS<br>15 AULAS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <button class="btn">Faça sua<strong>&nbspmatrícula</strong></button>                            
                </div>
            </div>
        </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/inclusao.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush