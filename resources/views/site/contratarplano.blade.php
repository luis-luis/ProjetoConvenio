@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"></span> <span>Good Pet<i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Contratar Plano</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div id="steps">
            <!-- Etapa 1: Seleção do Plano -->
            <div class="step" id="step1">
                <h2 class="mb-4">Escolha o seu plano</h2>
                <form id="mainForm">
                    @csrf
                    <div class="form-group">
                        <label>
                            <input type="radio" name="plano" value="basico" required>
                            Plano Básico - R$ 49,90/mês
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="plano" value="intermediario">
                            Plano Intermediário - R$ 79,90/mês
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="plano" value="premium">
                            Plano Premium - R$ 129,90/mês
                        </label>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" onclick="nextStep(2)">Avançar</button>
                </form>
            </div>

            <!-- Etapa 2: Seleção do Método de Pagamento -->
            <div class="step" id="step2" style="display: none;">
                <h2 class="mb-4">Selecione o método de pagamento</h2>
                <div class="form-group">
                    <label>
                        <input type="radio" name="metodo_pagamento" value="cartao" required>
                        Cartão de Crédito
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="radio" name="metodo_pagamento" value="boleto">
                        Boleto Bancário
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="radio" name="metodo_pagamento" value="pix">
                        PIX
                    </label>
                </div>
                <button type="button" class="btn btn-secondary mt-3" onclick="prevStep(1)">Voltar</button>
                <button type="button" class="btn btn-primary mt-3" onclick="nextStep(3)">Avançar</button>
            </div>

            <!-- Etapa 3: Confirmação -->
            <div class="step" id="step3" style="display: none;">
                <h2 class="mb-4">Confirmação</h2>
                <p><strong>Plano Selecionado:</strong> <span id="planoSelecionado"></span></p>
                <p><strong>Método de Pagamento:</strong> <span id="metodoSelecionado"></span></p>
                <button type="button" class="btn btn-secondary mt-3" onclick="prevStep(2)">Voltar</button>
                <button type="submit" class="btn btn-success mt-3" onclick="submitForm()">Finalizar Pedido</button>
            </div>
        </div>
    </div>
</section>

<div id="loadingSpinner" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(255,255,255,0.7); z-index:9999; justify-content:center; align-items:center;">
    <div class="spinner-border text-primary" style="width: 4rem; height: 4rem;" role="status">
        <span class="sr-only">Carregando...</span>
    </div>
</div>

<script src="{{ asset('js/contratarplano.js') }}"></script>

@endsection