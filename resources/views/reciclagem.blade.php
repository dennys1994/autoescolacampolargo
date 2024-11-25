@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>RECICLAGEM</strong></h2>
            </div>
        </div>
    </section>
    <section id="reciclagem">
        <div class="container">            
            <div class="row d-flex justify-content-around">
                <!-- Primeira Coluna -->
                <div class="col-12" id="title-reciclagem">
                    <h1>Reciclagem</h1>
                    <p>Oferecemos cursos especializados para habilitados com demandas específicas, como reciclagem, superação do medo de dirigir e treinamento prático em rodovias.</p>
                </div>

                <div class="col-12 fundo-branco">
                    <p id="text-reciclage">O curso de reciclagem, voltado para quem teve a carteira de habilitação suspensa, é totalmente online, prático e oferecido em 30 horas de aulas nos finais de semana. Com o aumento na rigidez das leis de trânsito, a procura por esse curso tem crescido. Ao final, o aluno fica isento de realizar a prova no Detran.</p>
                    <hr>
                    <div class="container">            
                        <div class="row">               
                            <!-- Card 1 -->
                            <div class="col-12">
                                <div class="container">            
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="card text-center">
                                                <div class="card-body d-flex align-items-center">
                                                    <i><img src="{{asset ('img/icons/exame.png')}}" alt="" srcset=""></i>
                                                    <p class="mb-0">AULAS TEÓRICAS ONLINE</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 2 -->
                                        <div class="col-6 col-md-3">
                                            <div class="card text-center">
                                                <div class="card-body d-flex align-items-center">
                                                    <i><img src="{{asset ('img/icons/clock.png')}}" alt="" srcset=""></i>
                                                    <p class="mb-0">HORÁRIOS FLEXÍVEIS</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 3 -->
                                        <div class="col-12 col-md-5 ">
                                            <div class="card text-center" style="background-color: #890004">
                                                <div class="card-body d-flex align-items-center">
                                                    <i><img src="{{asset ('img/icons/finger.png')}}" alt="" srcset=""></i>
                                                    <p class="mb-0">DOCUMENTOS NECESSÁRIOS<br>CNH dentro do prazo de validade.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                
                            <div class="col-12 text-center mt-4">
                                <a href="{{route ("pre_matricula")}}" class="btn">Faça sua<strong>&nbspmatrícula</strong></a>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/reciclagem.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush