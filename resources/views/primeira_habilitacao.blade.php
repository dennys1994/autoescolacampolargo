@extends('layouts.app')

@section('title', 'A Escola - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4 pb-1">
                <h2 class="d-inline-block text-white ">1° <strong>HABILITAÇÃO</strong></h2>
            </div>
        </div>
    </section>

    <section id="primeirahabilitacao">
        <div class="container">
            <div class="row">
                <div class="col-12 fundo-elemento">
                    <div class="row d-flex align-items-stretch">
                        <!-- Primeira linha -->
                        <div class="col-12">
                            <div class="introducao">
                                <h3><strong>1° Carteira de Motorista</strong><br></h3>
                                <p>Essa é a categoria de Carteira de Motorista mais procurada pelos candidatos, por isso oferecemos um Complexo de Treinamento Exclusivo e totalmente equipado, com veículos novos e pista de moto coberta.</p>
                            </div>
                        </div>
                        <!-- Segunda linha -->
                        <div class="col-12 card-aula" style="background: #fff">
                            <div class="row">
                                <div class="col-4">
                                    <h1>CARRO & MOTO</h1>
                                </div>
                                <div class="col-8 mb-5">
                                    <p>
                                        Otimize seu tempo e economize fazendo as duas categorias de uma vez, já que o curso teórico é válido para ambas.
                                        Carga horária 45 aulas teóricas online, 20 aulas práticas de Carro e 20 aulas práticas de Moto.
                                    </p>
                                </div>                                
                                <hr>
                                <div class="conteudo col-12">   
                                    <div class="container-fluid">
                                        <div class="row d-flex justify-content-center"> 
                                            <!-- Card 1: Aulas Teóricas Online -->
                                            <div class="col-12 col-md-2 ">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-mobile fa-3x"></i>
                                                        <p>AULAS TEÓRICAS<br><strong>ONLINE</strong><br><strong>45 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <!-- Card 2: Aulas Práticas Carro -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-car fa-3x"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>CARRO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <!-- Card 3: Aulas Práticas Moto -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-motorcycle fa-3x me-3"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>MOTO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                
                                            <!-- Card 4: Documentos Necessários -->
                                            <div class="col-12 col-md-4">
                                                <div class="card text-white" style="background: #890004;">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-fingerprint fa-3x"></i>
                                                        <p>DOCUMENTOS NECESSÁRIOS<br><strong>RG; CPF E comprovante de residência.</strong></p>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>                                
                            </div>                   
                        </div>
                        <!-- Segunda linha -->
                        <div class="col-12 card-aula">
                            <div class="row">
                                <div class="col-4">
                                    <h1>CARRO</h1>
                                </div>
                                <div class="col-8 mb-5">
                                    <p>
                                        Este é o serviço mais procurado pelos candidatos à primeira habilitação. Com uma frota de veículos novos e um Complexo de Treinamento completo, você vivenciará situações reais do trânsito. São 45 aulas teóricas online e 20 práticas para uma preparação completa!
                                    </p>
                                </div>    
                                <hr>
                                <div class="conteudo col-12">   
                                    <div class="container-fluid">
                                        <div class="row d-flex justify-content-center"> 
                                            <!-- Card 3: Aulas Práticas Moto -->
                                            <div class="col-12 col-md-2 d-none d-sm-bloc">
                                                <div class="card text-center" style="visibility:hidden">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-motorcycle fa-3x me-3"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>MOTO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card 1: Aulas Teóricas Online -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-mobile fa-3x"></i>
                                                        <p>AULAS TEÓRICAS<br><strong>ONLINE</strong><br><strong>45 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <!-- Card 2: Aulas Práticas Carro -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-car fa-3x"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>CARRO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            
                                            
                                
                                            <!-- Card 4: Documentos Necessários -->
                                            <div class="col-12 col-md-4">
                                                <div class="card text-white" style="background: #890004;">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-fingerprint fa-3x"></i>
                                                        <p>DOCUMENTOS NECESSÁRIOS<br><strong>RG; CPF E comprovante de residência.</strong></p>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>          
                            </div>                   
                        </div>
                        <!-- terceira linha -->
                        <div class="col-12 card-aula" style="background: #fff">
                            <div class="row">
                                <div class="col-4">
                                    <h1>MOTO</h1>
                                </div>
                                <div class="col-8 mb-5">
                                    <p>
                                        Para a primeira habilitação, a categoria A tem o processo mais rápido devido à disponibilidade de motocicletas e horários flexíveis. As aulas acontecem em uma pista coberta e iluminada, garantindo conforto em qualquer horário ou condição climática. O curso inclui 45 aulas teóricas online e 20 práticas.
                                    </p>
                                </div>               
                                <hr>
                                <div class="conteudo col-12">   
                                    <div class="container-fluid">
                                        <div class="row d-flex justify-content-center">
                                            <!-- Card 2: Aulas Práticas Carro -->
                                            <div class="col-12 col-md-2 d-none d-sm-bloc">
                                                <div class="card text-center" style="visibility: hidden;">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-car fa-3x"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>CARRO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Card 1: Aulas Teóricas Online -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-mobile fa-3x"></i>
                                                        <p>AULAS TEÓRICAS<br><strong>ONLINE</strong><br><strong>45 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            
                                
                                            <!-- Card 3: Aulas Práticas Moto -->
                                            <div class="col-12 col-md-2">
                                                <div class="card text-center">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-motorcycle fa-3x me-3"></i>
                                                        <p>AULAS PRÁTICAS<br><strong>MOTO</strong><br><strong>20 AULAS</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                
                                            <!-- Card 4: Documentos Necessários -->
                                            <div class="col-12 col-md-4">
                                                <div class="card text-white" style="background: #890004;">
                                                    <div class="card-body d-flex align-items-center">
                                                        <i class="fa-solid fa-fingerprint fa-3x"></i>
                                                        <p>DOCUMENTOS NECESSÁRIOS<br><strong>RG; CPF E comprovante de residência.</strong></p>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>         
                            </div>                                                      
                        </div>
                    </div>
                </div>
                <a href="{{route ("pre_matricula")}}"class="btn">Faça sua <strong>Matrícula</strong></a>
            </div>
        </div>
    </section>



      
@endsection
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/primeirahabilitacao.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush