<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title', 'Autoescola')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="htpps://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>

    @stack('styles')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand text-white" href="{{ route('home') }}">
                    <img id="nav-logo" src="{{ asset('img/logo.png') }}" alt="Logo Autoescola">
                </a>
        
                <!-- Botão responsivo para dispositivos menores -->
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Links do menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Link Home -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                        </li>
        
                        <!-- Link A Escola com Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="escolaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                A Escola                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="escolaDropdown">
                                <li><a class="dropdown-item text-white" href="{{ route('a_escola') }}">Conheça a Escola</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('estrutura') }}">Nossa Estrutura</a></li>
                            </ul>
                        </li>
        
                        <!-- Link Nossos Cursos com Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="cursosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nossos Cursos                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="cursosDropdown">
                                <li><a class="dropdown-item text-white" href="{{ route('primeira_habilitacao') }}">1ª Habilitação</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('reciclagem') }}">Reciclagem</a></li>
                                <li><a class="dropdown-item text-white" href="{{ route('inclusao_categoria') }}">Inclusão de Categoria</a></li>
                                <!--<li><a class="dropdown-item text-white" href="{{ route('treinamento') }}">Avaliação</a></li>-->
                                <li><a class="dropdown-item text-white" href="{{ route('treinamento') }}">Treinamento de Motoristas</a></li>
                            </ul>
                        </li>
        
                        <!-- Link Área do Aluno -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('area_aluno') }}">Área do Aluno</a>
                        </li>
        
                        <!-- Link Pré-Matrícula -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('pre_matricula') }}">Pré-Matrícula</a>
                        </li>
        
                        <!-- Link Contato -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contato') }}">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>    

    <main>
        @yield('content')
    </main>

    <!-- WhatsApp Icon Floating -->
    <a href="https://wa.me/5541998073444" target="_blank" class="whatsapp-icon" title="Fale conosco pelo WhatsApp">
        <img src="{{asset ('img/icons/whatsapp-lg.png')}}" alt="WhatsApp" />
    </a>

    <footer class="custom-footer d-none d-md-block">
        <div class="custom-container">
          <div class="custom-row">
            <!-- Logo -->
            <div class="custom-footer-item custom-logo">
              <img src="{{ asset('img/logo-footer.png')}}" alt="Logo">
            </div>
            
            <!-- Endereço -->
            <div class="custom-footer-item custom-adress">
                <div id="fig-adress">
                    <img src="{{ asset('img/icons/pin.png')}}" alt="pin">
                    <p>Av. Des. Clotário Portugal, 1076 -<br> Centro, Campo Largo</p>
                </div>
                <div class="phone-space">
                    <span>
                        <i class="fa-solid fa-phone"></i>&nbsp
                        (41) <strong>3032-1212</strong>
                    </span>
                    <a  href="https://api.whatsapp.com/send?phone=5541998073444" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>&nbsp
                        (41) <strong>99807-3444</strong>
                    </a>
                </div>
            </div>
            
            <!-- Horário de Funcionamento -->
            <div class="custom-footer-item custom-hours">
                <img src="{{ asset('img/icons/clock.png')}}" alt="clock">
                <p>                    
                    De segunda a sexta das 09h às 18h30<br>
                    Sábado das 09h às 12h
                </p>
            </div>
            
            <!-- Redes Sociais -->
            <div class="custom-footer-item custom-social">
                <a href="https://www.instagram.com/autoescolacampolargo/" target="_blank">
                    <i class="fab fa-instagram"></i> <!-- Ícone do Instagram -->
                </a>
                <a href="https://www.facebook.com/p/Auto-Escola-Campo-Largo-100063636100635/" target="_blank">
                    <i class="fab fa-facebook-f"></i> <!-- Ícone do Facebook -->
                </a>
            </div>
            
            <!-- Mapa -->
            <div class="custom-footer-item custom-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1801.1865358738207!2d-49.52890825557251!3d-25.459215200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dd19d5277bb62f%3A0xdf6682a3ed771959!2sAutoescola%20Campo%20Largo!5e0!3m2!1spt-BR!2sbr!4v1732124358979!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
    </footer>    
    
    <!--Footer mobile-->
    <footer id="footer-mobile" class="d-block d-md-none text-white py-4">
        <div class="container">
          <div class="row">
            <!-- Coluna 1: Entre em contato -->
            <div class="col-6" style="padding-left: 32px;">
              <h5>Entre em Contato</h5>
              <ul class="list-unstyled mb-3 ">
                <li><a href="tel:+554130321212"  style="text-decoration: none; color: inherit;"><i class="fa-solid fa-phone"></i>&nbsp(41)&nbsp<strong>3032-1212</strong></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5541998073444"  style="text-decoration: none; color: inherit;" target="_blank"><i class="fa-brands fa-whatsapp"></i>&nbsp(41)&nbsp<strong>99807-3444</strong></a></li>
              </ul>
              <div class="d-flex">
                <a href="https://www.facebook.com/p/Auto-Escola-Campo-Largo-100063636100635/" target="_blank" class="me-3 text-white">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/autoescolacampolargo/" target="_blank" class="text-white">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
              </div>
            </div>
            
            <!-- Coluna 2: Horário e endereço -->
            <div class="col-6" style="padding-right: 32px;">
                <!-- Horário -->
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ asset('img/icons/clock.png') }}" alt="clock" class="icon-small me-2">
                    <p class="mb-0">
                        De segunda a sexta das 09h às 18h30<br>
                        Sábado das 09h às 12h
                    </p>
                </div>
                
                <!-- Endereço -->
                <h5>Visite nossa unidade</h5>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/icons/pin.png') }}" alt="pin" class="icon-small me-2">
                    <p class="mb-0">Av. Des. Clotário Portugal, 1076 - Centro, Campo Largo</p>
                </div>
            </div>
        </div>
      
        <!-- Mapa -->
        <div class="row mt-4">
            <div class="col-12">
              <div id="map-container" style="width: 100%; height: 200px;">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1801.1865358738207!2d-49.52890825557251!3d-25.459215200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dd19d5277bb62f%3A0xdf6682a3ed771959!2sAutoescola%20Campo%20Largo!5e0!3m2!1spt-BR!2sbr!4v1732124358979!5m2!1spt-BR!2sbr" 
                  width="100%" 
                  height="100%" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </footer>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>