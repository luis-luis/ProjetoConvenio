@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2 d-flex align-items-center justify-content-center text-center" 
    style="background-image: url('/images/dog-1637401_1280.jpg'); height: 70vh; background-size: cover; background-position: center;"
    data-stellar-background-ratio="0.5">
    
    <div class="overlay"></div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <h1 class="mb-3 text-white">Mais do que apenas um beneficio.</h1>
                <p class="text-white">Oferecemos planos de cuidado completo para toda a família</p>
                <a href="#testando" class="btn btn-dark">Quero o plano empresarial</a>
            </div>
        </div>
    </div>

</section>

<section id="testando" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow-sm">
                    <h2 class="text-center mb-4">Entre em Contato</h2>
                    <p class="text-center text-muted">Preencha o formulário e saiba mais sobre nosso plano empresarial para pets.</p>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail corporativo" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone de Contato</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="(00) 00000-0000" required>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-dark px-4 py-2">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection