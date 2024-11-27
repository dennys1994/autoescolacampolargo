@extends('layouts.app')

@section('title', 'Área do aluno - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>ÁREA DO ALUNO</strong></h2>
            </div>
        </div>
    </section>
    <section id="area-aluno">
        <div class="container">            
            <div class="row d-flex justify-content-center">                                                              
                <div class="container mt-4">
                    <div class="row g-3">
                      <!-- Card 1 -->
                      <div class="col-6 col-lg-3">
                          <a href="https://www.simulado.detran.pr.gov.br/detran-prova/simularProva.do?action=iniciarProcesso" target="_blank">
                            <div class="card text-white rounded-4 h-100">
                              <div class="card-body d-flex align-items-center">
                                <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                 <img src="{{ asset('img/icons/simulado.png') }}" alt="pin" class="icon-small">
                                </div>
                                <p class="card-text mb-0"><strong>SIMULADO</strong> DETRAN</p>
                            </div>                          
                          </div>
                        </a>
                      </div>
                      <!-- Card 2 -->
                      <div class="col-6 col-lg-3">
                        <a href="https://www.detran.pr.gov.br/servicos/Motorista/1a-Habilitacao/Instalar-o-aplicativo-Primeira-Habilitacao-Detran-PR-WaowMK3D" target="_blank">
                          <div class="card text-white rounded-4 h-100">
                            <div class="card-body d-flex align-items-center">
                              <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                  <img src="{{ asset('img/icons/person.png') }}" alt="pin" class="icon-small">
                              </div>
                              <p class="card-text mb-0"><strong>APP</strong> PRIMEIRA HABILITAÇÃO</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- Card 3 -->
                      <div class="col-6 col-lg-3">
                        <a href="" target="_blank">
                          <div class="card text-white rounded-4 h-100">                          
                            <div class="card-body d-flex align-items-center">
                              <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                  <img src="{{ asset('img/icons/book.png') }}" alt="pin" class="icon-small">
                              </div>
                              <p class="card-text mb-0">MATERIAIS <strong>DE APOIO</strong></p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- Card 4 -->
                      <div class="col-6 col-lg-3">
                        <a href="https://www.detran.pr.gov.br/servicos/consultar-envio-da-cnh" target="_blank">
                          <div class="card text-white rounded-4 h-100">
                            <div class="card-body d-flex align-items-center">
                              <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                  <img src="{{ asset('img/icons/cnh.png') }}" alt="pin" class="icon-small">
                              </div>
                              <p class="card-text mb-0"><strong>RASTREAMENTO</strong> CNH</p>
                            </div>
                          </div>
                        </a>
                      </div>                      
                    </div>
                  </div>
                  

                <div class="col-12 col-md-4 text-center mt-4">                    
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#aulaRemotaModal">
                      <strong>ACESSO AULA REMOTA</strong><img src="{{ asset('img/icons/click.png') }}" alt="pin" class="icon-small me-2">
                    </button>                            
                </div>     
                    
            </div>
        </div>
</section>

<!-- Modal -->
<div class="modal fade" id="aulaRemotaModal" tabindex="-1" aria-labelledby="aulaRemotaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="background: #1A2352; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="aulaRemotaLabel">Acesso Aula Remota</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3 d-flex justify-content-center">
          <!-- 6 Cards -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <a href="https://webcfc.com.br/aluno/" target="_blank" style="text-decoration: none">
                <div class="card-body">
                  <h3>1° passo</h3>
                  <p>
                    <img src="{{asset ('img/icons/click-blue.png')}}" alt="click" style="display: inline; vertical-align: middle; width: 24px; height: auto;">
                    Clique aqui
                  </p>                
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <div class="card-body">
                <h3>2° passo</h3>
                <p>
                  <img src="{{asset ('img/icons/pin-blue.png')}}" alt="pin">
                  Selecione o ESTADO PR
                </p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <div class="card-body">
                <h3>3° passo</h3>
                 <p>


                  <img src="{{asset ('img/icons/pin-blue.png')}}" alt="pin">
                  Selecione a  CFC CAMPO LARGO
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <div class="card-body">
                <h3>4° passo</h3>
                 <p>
                  <img src="{{asset ('img/icons/perfil-blue.png')}}" alt="pin">
                  DIGITE SEU CPF
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <div class="card-body">
                <h3>5° passo</h3>
                 <p>


                  <img src="{{asset ('img/icons/mic-blue.png')}}" alt="pin">
                  Clique em entrar e autorize o uso da câmera e microfone
                </p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card text-center h-100 d-flex justify-content-center align-items-center">
              <div class="card-body">
                <h3>6° passo</h3>
                 <p>


                  <img src="{{asset ('img/icons/cam.png')}}" alt="pin">
                  posicione seu rosto na área indicada na tela e espere a coleta da foto
                </p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center" style="background: #A40206;">
              <button class="btn" data-bs-toggle="modal" data-bs-target="#infoModal">
                <div class="card-body" >                
                  <p style="color: #fff!important">
                    <img src="{{asset ('img/icons/click.png')}}" alt="pin">
                    CLIQUE AQUI E CONFIRA DICAS PARA A SUA AULA REMOTA
                  </p> 
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- Botão -->
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    

<!--Modal ajuda-->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background: #1A2352; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="infoModalLabel">Informações Importantes</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Lista à esquerda -->
          <div class="col-12 col-md-6">
            <ul class="list-unstyled">
              <li class="d-flex align-items-start mb-3">
                <img src="{{asset('img/icons/item.png')}}" alt="ícone" style="width: 24px; height: 24px;" class="me-2">
                Para o acesso no computador, entre pelo Google Chrome. Se for pelo celular, use o Safari em iPhone (iOS) ou Google Chrome em Android.
              </li>
              <li class="d-flex align-items-start mb-3">
                <img src="{{asset('img/icons/item.png')}}" alt="ícone" style="width: 24px; height: 24px;" class="me-2">
                Desligue o MODO ECONOMIA DE BATERIA do celular. Esse recurso diminui a velocidade da internet e pode prejudicar o acesso à aula.
              </li>
              <li class="d-flex align-items-start mb-3">
                <img src="{{asset('img/icons/item.png')}}" alt="ícone" style="width: 24px; height: 24px;" class="me-2">
                Aceite as permissões de câmera e microfone que vão aparecer no seu navegador.
              </li>
              <li class="d-flex align-items-start">
                <img src="{{asset('img/icons/item.png')}}" alt="ícone" style="width: 24px; height: 24px;" class="me-2">
                Procure um local silencioso e com boa iluminação para facilitar a biometria facial.
              </li>
            </ul>
          </div>
          <!-- Botão à direita -->
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <button class="btn btn-danger d-flex align-items-center rounded-5" data-bs-toggle="modal" data-bs-target="#videoModal">
              <img src="{{asset('img/icons/play.png')}}" alt="ícone" style="width: 24px; height: 24px;" class="me-2">
              Caso tenha dúvidas, clique aqui e assista um vídeo explicativo
            </button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal para o vídeo -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Embed do vídeo do YouTube -->
        <div class="ratio ratio-16x9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/IFnI03v3H9g?si=Jw1_kB08VQZGuCF9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



      
@endsection
@push('styles')
    <link href="{{ asset('css/area-aluno.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush