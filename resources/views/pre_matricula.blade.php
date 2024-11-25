@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>PRÉ-MATRÍCULA</strong></h2>
            </div>
        </div>
    </section>
    <section id="matricula">
        <div class="container mt-5">
            <div class="row externo">
              <!-- Coluna do Formulário -->
              <div class="col-lg-8 form-bg">
                <form>
                  <!-- Campo Nome -->
                  <div class="col-md-12 mb-3">                
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                  </div>
        
                  <!-- Campo Telefone e Email -->
                  <div class="row mb-3">
                    <div class="col-md-6 custom-padding-left">
                        <input type="tel" class="form-control" id="telefone" placeholder="Telefone">
                    </div>
                    <div class="col-md-6 custom-padding-right">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                
        
                  <!-- Campo Categoria e anexo-->
                  <div class="row mb-3">
                    <div class="col-md-6 custom-padding-left">
                      <input type="tel" class="form-control" id="Categoria" placeholder="Categoria">
                    </div>
                    <div class="col-md-6 custom-padding-right ">
                        <!-- Para Desktop -->
                        <label for="anexo" class="btn btn-primary w-100 rounded-4 d-none d-md-block">
                            <i class="fa fa-paperclip fa-2x" aria-hidden="true"></i>
                            Anexo RG/CPF e comprovante de residência
                        </label>

                        <!-- Para Celular -->
                        <label for="anexo" class="btn btn-primary w-100 rounded-4 d-flex justify-content-center align-items-center d-block d-md-none">
                            <i class="fa fa-paperclip fa-2x" aria-hidden="true"></i>
                            Anexo RG/CPF e comprovante de residência
                        </label>

                        <input type="file" class="form-control" id="anexo" multiple style="display: none;">
                    </div>
                  </div>
        
                  <!-- Botão de Enviar -->
                  <button type="submit" class="btn btn-primary btn-desktop" style="background: #A40206!important; border: 1px solid #A40206!important;">Enviar Mensagem</button>

                  <div class="row mb-3">
                    <div class="col-12 text-center d-block d-md-none">
                      <button type="submit" class="btn btn-primary" style="background: #A40206!important; border: 1px solid #A40206!important;">
                        Enviar Mensagem
                      </button>
                    </div>
                  </div>
                  
                </form>
              </div>
        
                <!-- Coluna do Aviso -->
                <div class="col-lg-4">
                    <div class="alert-payament">
                        <h5 class="alert-heading">Formas de Pagamento</h5>
                        <ul class="mb-0">
                            <li>Cartão de crédito</li>
                            <li>Crediário próprio (pagamento facilitado, sem consultas ao SPC/SERASA)</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/matricula.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush