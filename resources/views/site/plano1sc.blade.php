@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"></span><span>Good Pet <i class="ion-ios-arrow-forward"></i></span></p>
                <div style="display: flex; align-items: center;">
                    <h1 class="mb-0 bread">Plano Pet Inicial</h1>
                    <span style="font-size: 18px; color: #f0f0f0; margin-left: 15px;">(Sem coparticipação)</span>
                </div>
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
                        <h4>Principal vantagem</h4>
                        <p>O plano pet inicial é para aquelas pessoas que querem garantir a saúde do seu pet com consultas, vacinas etc, sem ficar desamparado quando seu pet passar mal e não tem condições de levar ao veterinário, tudo isso gastando o mínimo possível.</p>
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
                        <h3 class="heading">Valor Acessivel</h3>
                        <p>Por apenas R$ 39,90 seu animalzinho estará protegido.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa-solid fa-stethoscope"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Cuidados veterinários</h3>
                        <p>Seu pet vai ter acesso a vacinas e consulta, tudo para garantir que sua saúde esteja sempre em dia.</p>
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
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-arrow-down"></span><i class="sr-only">Sabia mais</i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row mt-5 pt-4">
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-blind"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Dog Walking</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-dog-eating"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Pet Daycare</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                <div class="d-block services text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-grooming"></span>
                    </div>
                    <div class="media-body p-4">
                        <h3 class="heading">Pet Grooming</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>

@endsection