@extends('layouts.app')

@section('title', 'A Escola - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="nossas-vantagens">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white pb-1">A <strong>ESCOLA</strong></h2>
            </div>
        </div>
    </section>
    <section id="a-escola">
        <div class="container">
            <div class="row">
                <div class="col-12 fundo-elemento">
                    <div class="row d-flex align-items-stretch">
                        <!-- Primeira Coluna -->
                        <div class="col-12 col-md-7">
                            <p>
                                &nbsp;&nbsp;&nbsp;Desde 1996, a Autoescola Campo Largo é um negócio familiar dedicado a formar
                                condutores responsáveis e preparados para as estradas.<br>
                                &nbsp;&nbsp;&nbsp;Com quase três décadas de experiência, estamos localizados no coração de Campo Largo e oferecemos um ensino de qualidade, conduzido por instrutores experientes, que fazem parte de nossa tradição de
                                excelência.<br>
                                &nbsp;&nbsp;&nbsp;Nossos valores são transparência, respeito e compromisso com a segurança, sempre
                                colocando o aprendizado e a confiança de nossos alunos em primeiro lugar.<br>
                                &nbsp;&nbsp;&nbsp;Acompanhamos cada passo do processo para que você conquiste sua habilitação com
                                tranquilidade, segurança e o acolhimento de uma verdadeira família.
                            </p>
                        </div>
                    
                        <!-- Segunda Coluna -->
                        <div class="col-12 col-md-5">
                            <div id="carouselescola" class="carousel slide h-100" data-ride="carousel">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/escola/escola-1.png')}}" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                    <a href="{{route ("estrutura")}}" class="btn">Conheça nossa <strong>estrutura</strong></a>
                
            </div>
        </div>
    </section>



      
@endsection
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/escola.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush