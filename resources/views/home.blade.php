@extends('layouts.app')

@section('title', 'Home - Autoescola')

@section('content')
    <section class="banner-home">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Imagem para desktop (oculta no mobile) -->
                    <img class="d-block w-100 img-fluid d-none d-md-block" src="{{asset('img/banner-home.png')}}" alt="First slide">                    
                    <!-- Imagem para mobile (oculta no desktop) e agora é um link -->
                    <a href="{{ route('pre_matricula') }}">
                        <img class="d-block w-100 img-fluid d-md-none" src="{{asset('img/banner-home-mb.png')}}" alt="First slide mobile">
                        <button class="btn btn-banner position-absolute bottom-0 end-0 m-3 d-none d-md-block">FAÇA JÁ SUA <strong>MATRÍCULA</strong></button>
                    </a>
                </div>   
            </div>
        </div>
    </section>
    
    <section id="nossas-vantagens">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white">Nossas <strong>Vantagens</strong></h2>
              </div>
          <div class="row">
            <!-- Card 1 -->
            <div class="col-6 col-md-4 mb-2 p-1">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                     <h5 class="card-title mb-0"><strong>Aula Remota</strong></h5>                      
                    <button class="btn btn-link mais-info">
                      <i class="fas fa-chevron-down d-md-none"></i>
                    </button>                    
                  </div>
                  <hr class="my-3 d-none d-md-block">
                  <p class="card-text d-none d-md-block">Aulas remotas oferecem flexibilidade e praticidade para estudar a teoria do trânsito e se preparar para a prova.</p>
                  <div class="d-md-none">
                    <p class="card-text full-text d-none">Aulas remotas oferecem flexibilidade e praticidade para estudar a teoria do trânsito e se preparar para a prova.</p>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Card 2 -->
            <div class="col-6 col-md-4 mb-2 p-1">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                     <h5 class="card-title mb-0"><strong>Aulas por Módulo </strong></h5>  
                    <button class="btn btn-link mais-info">
                      <i class="fas fa-chevron-down d-md-none"></i>
                    </button>
                  </div>
                  <hr class="my-3 d-none d-md-block">
                  <p class="card-text d-none d-md-block">Ao se matricular, você pode começar as aulas de imediato, no horário que preferir.</p>
                  <div class="d-md-none">
                    <p class="card-text full-text d-none">Ao se matricular, você pode começar as aulas de imediato, no horário que preferir.</p>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Card 3 -->
            <div class="col-6 col-md-4 mb-2 p-1">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                     <h5 class="card-title mb-0"><strong>Dedicação aos Surdos </strong></h5>  
                    <button class="btn btn-link mais-info">
                      <i class="fas fa-chevron-down d-md-none"></i>
                    </button>
                  </div>
                  <hr class="my-3 d-none d-md-block">
                  <p class="card-text d-none d-md-block">Todas as aulas têm legendas automáticas, garantindo acessibilidade.</p>
                  <div class="d-md-none">
                    <p class="card-text full-text d-none">Todas as aulas têm legendas automáticas, garantindo acessibilidade.</p>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Card 4 -->
            <div class="col-6 col-md-4 mb-2 p-1">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                       <h5 class="card-title mb-0"><strong>Aula Remota ao Vivo </strong></h5>  
                      <button class="btn btn-link mais-info">
                        <i class="fas fa-chevron-down d-md-none"></i>
                      </button>
                    </div>
                    <hr class="my-3 d-none d-md-block">
                    <p class="card-text d-none d-md-block">Oferecemos turmas de manhã, tarde, noite e aos sábados para sua conveniência. Escolha o melhor horário!</p>
                    <div class="d-md-none">
                      <p class="card-text full-text d-none">Oferecemos turmas de manhã, tarde, noite e aos sábados para sua conveniência. Escolha o melhor horário!</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 5 -->
            <div class="col-6 col-md-4 mb-2 p-1">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                       <h5 class="card-title mb-0"><strong>Instrutores experientes </strong></h5>  
                      <button class="btn btn-link mais-info">
                        <i class="fas fa-chevron-down d-md-none"></i>
                      </button>
                    </div>
                    <hr class="my-3 d-none d-md-block">
                    <p class="card-text d-none d-md-block">Instrutores experientes e qualificados, prontos para guiar você em cada etapa do aprendizado.</p>
                    <div class="d-md-none">
                      <p class="card-text full-text d-none">Instrutores experientes e qualificados, prontos para guiar você em cada etapa do aprendizado.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 6 -->
            <div class="col-6 col-md-4 mb-2 p-1">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center">

                       <h5 class="card-title mb-0"><strong>Frota nova </strong></h5>  
                      <button class="btn btn-link mais-info">
                        <i class="fas fa-chevron-down d-md-none"></i>
                      </button>
                    </div>
                    <hr class="my-3 d-none d-md-block">
                    <p class="card-text d-none d-md-block">Nossa frota tem veículos novos, com direção hidráulica e ar-condicionado, garantindo conforto e segurança nas aulas práticas.</p>
                    <div class="d-md-none">
                      <p class="card-text full-text d-none">Nossa frota tem veículos novos, com direção hidráulica e ar-condicionado, garantindo conforto e segurança nas aulas práticas.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>

    <section id="faca-matricula" class ="d-none d-md-block">
        <div class="container">
          <!-- Título -->
          <h2 class="text-center text-white" style="background-color: #1A2352; padding: 15px 0;">
            Faça sua matrícula <strong>matricula</strong>
          </h2>
      
          <!-- Cards -->
          <div class="row">
            <!-- Card 1 (Cor #1A2352) -->
            <div class="col-6 col-md-3 mb-4 card-col">
              <div class="card text-center rounded-0" style="background-color: #1A2352; color: white; padding-top: 10%;">
                <div class="card-body">
                  <h5 class="card-title">1º HABILITAÇÃO</h5>
                  <a href="{{ route('primeira_habilitacao') }}"><button class="btn btn-light rounded-pill">Saiba Mais</button></a>
                </div>
              </div>
            </div>
      
            <!-- Card 2 (Cor #A40206) -->
            <div class="col-6 col-md-3 mb-4 card-col">
              <div class="card text-center rounded-0" style="background-color: #A40206; color: white; padding-top: 10%;">
                <div class="card-body">
                  <h5 class="card-title">RECICLAGEM</h5>
                  <a href="{{ route('reciclagem') }}"><button class="btn btn-light rounded-pill">Saiba Mais</button></a>
                </div>
              </div>
            </div>
      
            <!-- Card 3 (Cor #1A2352) -->
            <div class="col-6 col-md-3 mb-4 card-col">
              <div class="card text-center rounded-0" style="background-color: #1A2352; color: white; padding-top: 0.7vw;">
                <div class="card-body">
                  <h5 class="card-title">ALTERAÇÃO OU INCLUSÃO DE CATEGORIA</h5>
                  <a href="{{ route('inclusao_categoria') }}"><button class="btn btn-light rounded-pill">Saiba Mais</button></a>
                </div>
              </div>
            </div>
      
            <!-- Card 4 (Cor #A40206) -->
            <div class="col-6 col-md-3 mb-4 card-col">
              <div class="card text-center rounded-0" style="background-color: #A40206; color: white; padding-top: 0.7vw;">
                <div class="card-body">
                  <h5 class="card-title">AVALIAÇÃO E TREINAMENTO DE MOTORISTAS</h5>
                  <a href="{{ route('treinamento') }}"><button class="btn btn-light rounded-pill">Saiba Mais</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="faca-matricula-mobile" class="d-block d-md-none">
        <div class="container p-0">
            <!-- Título -->
            <h2 class="text-center text-white" style="background-color: #1A2352; padding: 15px 0;">
                Faça sua matrícula <strong>matricula</strong>
            </h2>
      
            <!-- Cards -->
            <div class="row m-1">
                <!-- Card 1 (Cor #1A2352) -->
                <div class="col-6">
                    <div class="card text-center rounded-0" style="background-color: #1A2352; color: white;">
                        <div class="card-body">
                            <h5 class="card-title">1º HABILITAÇÃO</h5>
                            <a href="{{route("primeira_habilitacao")}}"><button class="btn-matricula">Saiba Mais</button></a>
                        </div>
                    </div>
                </div>
      
                <!-- Card 2 (Cor #A40206) -->
                <div class="col-6">
                    <div class="card text-center rounded-0" style="background-color: #A40206; color: white;">
                        <div class="card-body">
                            <h5 class="card-title">RECICLAGEM</h5>
                            <a href="{{route("reciclagem")}}"><button class="btn-matricula">Saiba Mais</button></a>
                        </div>
                    </div>
                </div>
      
                <!-- Card 3 (Cor #1A2352) -->
                <div class="col-6">
                    <div class="card text-center rounded-0" style="background-color: #A40206; color: white;">
                        <div class="card-body">
                            <h5 class="card-title">ALTERAÇÃO OU INCLUSÃO DE CATEGORIA</h5>
                            <a href="{{route("inclusao_categoria")}}"><button class="btn-matricula">Saiba Mais</button></a>
                        </div>
                    </div>
                </div>
      
                <!-- Card 4 (Cor #A40206) -->
                <div class="col-6">
                    <div class="card text-center rounded-0" style="background-color: #1A2352; color: white;">
                        <div class="card-body">
                            <h5 class="card-title">AVALIAÇÃO E TREINAMENTO DE MOTORISTAS</h5>
                            <a href="{{route("treinamento")}}"><button class="btn-matricula">Saiba Mais</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section id="avaliacao-google" class="pt-5">
        <div class="container">
          <!-- Título da seção -->
          <h2 class="text-center mb-5">Veja o que os <strong>nossos alunos</strong> dizem</h2>
      
          <!-- Carrossel para dispositivos móveis -->
          <div id="carouselAvaliacao" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!-- Card 1 -->
              <div class="carousel-item active">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <!-- Símbolo de avaliação -->
                    <div class="d-flex align-items-center mb-3 stars">
                      <img src="{{asset ('img/icons/google.png')}}" alt="Google" width="30" height="30" class="mr-2">        
                      &nbsp&nbsp
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <!-- Nome do Avaliador -->
                    <h5 class="card-title">Leonardo Victor</h5>
                    <!-- Conteúdo da avaliação -->
                    <p class="card-text">                        
                        A Autoescola Campo Largo se destaca pelo método de baliza simples e eficiente, com apenas três passos. Os instrutores explicam muito bem, e a pista de treinamento é excelente, com estrutura completa, incluindo capa de chuva, capacete e até cafezinho. Localizada próxima ao CIRETRAN, permite treinar no mesmo percurso do exame, facilitando a aprovação. O atendimento é rápido e eficiente, resolvendo questões do processo na hora. Altamente recomendada!
                    </p>
                  </div>
                </div>
              </div>
      
              <!-- Card 2 -->
              <div class="carousel-item">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <!-- Símbolo de avaliação -->
                    <div class="d-flex align-items-center mb-3 stars">
                      <img src="{{asset ('img/icons/google.png')}}" alt="Google" width="30" height="30" class="mr-2">
                      &nbsp&nbsp
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <!-- Nome do Avaliador -->
                    <h5 class="card-title">Viviane Angelino</h5>
                    <!-- Conteúdo da avaliação -->
                    <p class="card-text">                        
                        A Autoescola é confiável, com aulas práticas de qualidade e instrutores atenciosos e respeitosos. O instrutor Hettori se destacou ao aprender Libras rapidamente para se comunicar com a aluna surda, demonstrando muita habilidade e sensibilidade. Com seu apoio, ela conseguiu aprender bem e foi aprovada. Avaliação nota 100, com elogios à equipe e à experiência geral!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Controles do carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAvaliacao" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAvaliacao" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      
          <!-- Cards para dispositivos maiores (desktop) -->
          <div class="row d-none d-md-flex">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 mb-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <!-- Símbolo de avaliação -->
                  <div class="d-flex align-items-center mb-3 stars">
                    <img src="{{asset ('img/icons/google.png')}}" alt="Google" width="30" height="30" class="mr-2">        
                    &nbsp&nbsp
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <!-- Nome do Avaliador -->
                  <h5 class="card-title">Leonardo Victor</h5>
                  <!-- Conteúdo da avaliação -->
                  <p class="card-text">                
                        A Autoescola Campo Largo se destaca pelo método de baliza simples e eficiente, com apenas três passos. Os instrutores explicam muito bem, e a pista de treinamento é excelente, com estrutura completa, incluindo capa de chuva, capacete e até cafezinho. Localizada próxima ao CIRETRAN, permite treinar no mesmo percurso do exame, facilitando a aprovação. O atendimento é rápido e eficiente, resolvendo questões do processo na hora. Altamente recomendada!
                  </p>
                </div>
              </div>
            </div>
      
            <!-- Card 2 -->
            <div class="col-12 col-md-6 mb-4">
              <div class="card shadow-lg">
                <div class="card-body">
                  <!-- Símbolo de avaliação -->
                  <div class="d-flex align-items-center mb-3 stars">
                    <img src="{{asset ('img/icons/google.png')}}" alt="Google" width="30" height="30" class="mr-2">
                    &nbsp&nbsp
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <!-- Nome do Avaliador -->
                  <h5 class="card-title">Viviane Angelino</h5>
                  <!-- Conteúdo da avaliação -->
                  <p class="card-text">                    
                    A Autoescola é confiável, com aulas práticas de qualidade e instrutores atenciosos e respeitosos. O instrutor Hettori se destacou ao aprender Libras rapidamente para se comunicar com a aluna surda, demonstrando muita habilidade e sensibilidade. Com seu apoio, ela conseguiu aprender bem e foi aprovada. Avaliação nota 100, com elogios à equipe e à experiência geral!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    <hr class="m-5">
    <section id="orcamento">
        <div class="container pb-5">
            <div class="row justify-content-center">
            <!-- Card Título -->
            <div class="col-12 col-lg-4 mb-4 d-flex justify-content-center align-items-center">
                <div class="card text-center shadow">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <h3 class="card-title orcamento-title">Orçamento</h3>
                </div>
                </div>
            </div>
            
            <!-- Card Formulário -->
            <div class="col-12 col-lg-8">
                <div class="card shadow">
                <div class="card-body">
                  <form id="contatoForm" action="{{ url('/contato') }}" method="POST">
                    @csrf
                    <!-- Nome -->
                    <div class="mb-3">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required>
                    </div>
                    <!-- Telefone e Email -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <!-- Serviço Selecionado (Campo Oculto) -->
                    <input type="hidden" id="servicoSelecionado" name="servico" value="">
                    <!-- Botões -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                      <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVIÇO <i class="fa fa-bars"></i>
                        </button>
                        <ul id="servico" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item" data-servico="habilitacao">1° Habilitação</a></li>
                          <li><a class="dropdown-item" data-servico="reciclagem">Reciclagem</a></li>
                          <li><a class="dropdown-item" data-servico="inclusao_categoria">Inclusão de Categoria</a></li>
                          <li><a class="dropdown-item" data-servico="avaliacao">Avaliação</a></li>
                          <li><a class="dropdown-item" data-servico="treinamento_motoristas">Treinamento</a></li>
                        </ul>
                      </div>                    
                      <button type="submit" class="btn btn-solicitar">Solicitar</button>
                    </div>
                </form>
                
                
                    <!-- Mensagem de Sucesso -->
                    @if (session('success'))
                        <div class="alert alert-success mt-4">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

      
      <script>
        $(document).ready(function(){
          $('.mais-info').click(function(){
            var $this = $(this);
            var $fullText = $this.closest('.card-body').find('.full-text');  // Mudança para encontrar o conteúdo correto
      
            // Alterna a visibilidade do conteúdo completo
            $fullText.toggleClass('d-none');
      
            // Alterna a seta para cima ou para baixo
            $this.find('i').toggleClass('fa-chevron-down fa-chevron-up');
          });
        });

      </script>
      <script>
        document.getElementById('contatoForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
    
            // Cria um FormData com os dados do formulário
            var formData = new FormData(this);
    
            // Envia o formulário com AJAX
            fetch('{{ url('/contato') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Inclui o token CSRF
                }
            })
            .then(response => response.json())  // Espera uma resposta em JSON
            .then(data => {
                if(data.success) {
                  this.reset(); // Limpa o formulário após o envio bem-sucedido
                    alert('Formulário enviado com sucesso!');
                    
                } else {
                    alert('Ocorreu um erro ao enviar o formulário.');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Ocorreu um erro ao enviar o formulário.');
            });
        });
    </script>
    <script>
      // Captura da seleção do serviço
      const servicoItems = document.querySelectorAll('#servico .dropdown-item');
      servicoItems.forEach(item => {
          item.addEventListener('click', function() {
              const servico = this.getAttribute('data-servico');
              document.getElementById('servicoSelecionado').value = servico;
              // Atualiza o botão para mostrar o serviço selecionado
              document.querySelector('#dropdownMenuButton').innerHTML = `${this.textContent}`;
              // Aplica a classe para diminuir o tamanho da fonte
              document.querySelector('#dropdownMenuButton').classList.add('servico-selecionado');
          });
      });
  </script>
      
@endsection
@push('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush