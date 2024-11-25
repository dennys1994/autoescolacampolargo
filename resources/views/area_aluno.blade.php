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
                <!-- Primeira Coluna -->
                <div class="col-12" id="title-area-aluno">                   
                    <p>Envie uma mensagem ou nos ligue</p>
                </div>               
                
                <div class="container mt-4">
                    <div class="row g-3">
                      <!-- Card 1 -->
                      <div class="col-6 col-lg-3">
                        <div class="card text-white rounded-4 h-100">
                          <div class="card-body d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                <img src="{{ asset('img/icons/simulado.png') }}" alt="pin" class="icon-small">
                            </div>
                            <p class="card-text mb-0"><strong>SIMULADO</strong> DETRAN</p>
                          </div>
                        </div>
                      </div>
                      <!-- Card 2 -->
                      <div class="col-6 col-lg-3">
                        <div class="card text-white rounded-4 h-100">
                          <div class="card-body d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                <img src="{{ asset('img/icons/person.png') }}" alt="pin" class="icon-small">
                            </div>
                            <p class="card-text mb-0"><strong>APP</strong> PRIMEIRA HABILITAÇÃO</p>
                          </div>
                        </div>
                      </div>
                      <!-- Card 3 -->
                      <div class="col-6 col-lg-3">
                        <div class="card text-white rounded-4 h-100">
                          <div class="card-body d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                <img src="{{ asset('img/icons/book.png') }}" alt="pin" class="icon-small">
                            </div>
                            <p class="card-text mb-0">MATERIAIS <strong>DE APOIO</strong></p>
                          </div>
                        </div>
                      </div>
                      <!-- Card 4 -->
                      <div class="col-6 col-lg-3">
                        <div class="card text-white rounded-4 h-100">
                          <div class="card-body d-flex align-items-center">
                            <div class="icon-box d-flex justify-content-center align-items-center rounded-circle">
                                <img src="{{ asset('img/icons/cnh.png') }}" alt="pin" class="icon-small">
                            </div>
                            <p class="card-text mb-0"><strong>RASTREAMENTO</strong> CNH</p>
                          </div>
                        </div>
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

<!-- Botão que abre o modal -->
<button class="btn" data-bs-toggle="modal" data-bs-target="#aulaRemotaModal">
  <strong>ACESSO AULA REMOTA</strong>
  <img src="{{ asset('img/icons/click.png') }}" alt="pin" class="icon-small me-2">
</button>

<!-- Modal -->
<div class="modal fade" id="aulaRemotaModal" tabindex="-1" aria-labelledby="aulaRemotaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background: #1A2352; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="aulaRemotaLabel">Acesso Aula Remota</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <!-- 6 Cards -->
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>1° passo</h3>
                <p>Clique aqui</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>2° passo</h3>
                <p>Selecione o ESTADO PR</p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>3° passo</h3>
                <p>Clique aqui</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>4° passo</h3>
                <p>Clique aqui</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>5° passo</h3>
                <p>Clique aqui</p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <h3>6° passo</h3>
                <p>Clique aqui</p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">                
                <p>Clique aqui</p> 
              </div>
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

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/area-aluno.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush