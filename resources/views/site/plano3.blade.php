@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"></span> <span>Good Pet<i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Plano Pet Intermediário</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-5 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
                </div>
            </div>
            <div class="col-md-7 pl-md-5 py-md-5">
                <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Por que escolher este plano?</h2>
                </div>
                
                    <div class="col-md-6 services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
                        <div class="text pl-3">
                            <h4>Cuidado total para quem ama sem limites!</h4>
                            <p>O plano pet avançado é pensado para quem deseja proporcionar o máximo de segurança e bem-estar. Com mais atendimentos, exames completos e suporte em qualquer momento, seu pet estará sempre em boas mãos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-wallet"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Proteção completa por um valor justo</h3>
                        <p>Por R$ 149,90, você oferece ao seu pet um cuidado premium, sem se preocupar com imprevistos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa-solid fa-stethoscope"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Cuidado premium e exclusivo</h3>
                        <p>Além dos benefícios dos outros planos, aqui seu pet conta com atendimento emergencial 24h, exames detalhados, check-ups anuais e assistência completa para cada fase da vida.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-file"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Ficou interessado?</h3>
                        <p>Clique no botão abaixo e saiba todas as vantagens ofertadas por este plano!</p>
                        <a href="aindanaotem.html" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-arrow-down"></span><i class="sr-only">Sabia mais</i></a>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection