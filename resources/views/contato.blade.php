@extends('layouts.app')

@section('title', 'Contato - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>CONTATO</strong></h2>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">            
            <div class="row d-flex justify-content-center">
                <!-- Primeira Coluna -->
                <div class="col-12" id="title-contato">                   
                    <p>Envie uma mensagem ou nos ligue</p>
                </div>                                 
                <div class="col-12 col-md-4 text-center mt-4">
                    
                    <button class="btn"><img src="{{ asset('img/icons/whatsapp-color.png') }}" alt="pin" class="icon-small me-2"> <small>41</small> 99807-3444</button>                            
                </div>     
                <div class="col-12 col-md-4 text-center mt-1 mt-md-4">
                    
                    <button class="btn"><img src="{{ asset('img/icons/phone.png') }}" alt="pin" class="icon-small me-2"><small>41</small> 3032-1212</button>                            
                </div>      
            </div>
        </div>
</section>

    



      
@endsection
@push('styles')
    <link href="{{ asset('css/contato.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush