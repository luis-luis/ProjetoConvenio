@extends('layout.main2')

@section('content')
<section class="hero-wrap hero-wrap-2 d-flex align-items-center justify-content-center text-center" 
    style="background-image: url('/images/dog-1637401_1280.jpg'); height: 70vh; background-size: cover; background-position: center;"
    data-stellar-background-ratio="0.5">
    
    <div class="overlay"></div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <h1 class="mb-3 text-white">Erro 404</h1>
                <p class="text-white">Ops! A página que você tentou acessar não existe.</p>
                <a href="{{ url('/') }}" class="btn btn-primary">Voltar para a página inicial</a>
            </div>
        </div>
    </div>

</section>
@endsection
