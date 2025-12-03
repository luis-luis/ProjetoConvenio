@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2 d-flex align-items-center justify-content-center text-center"
  style="background-image: url('/images/dog-1637401_1280.jpg'); height: 70vh; background-size: cover; background-position: center;"
  data-stellar-background-ratio="0.5">

  <div class="overlay"></div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 ftco-animate">
        <h1 class="mb-3 text-white">Dashboard do Tutor</h1>
        <h5 class="text-white">Bem vindo, {{ Auth::user()->name }}</h5>
      </div>
    </div>
  </div>

</section>

<!-- <section>
  <div class="container py-5">
    <h2>Seus Pets Cadastrados</h2>
    Aqui você pode listar os pets cadastrados pelo tutor
    <p>Clique aqui para consultar seus pets cadastrados</p>
    <a href="{{ route('tutor.pets') }}" class="btn btn-dark">Ver pets</a>
  </div>

  <div class="row">
    <h2>Exames</h2>
    Aqui você pode listar os exames dos pets
    <p>Consulte os exames já feitos do seu pet</p>
    <a href="#" class="btn btn-dark">Ver exames</a>
  </div>
</section> -->

<section>
  <div class="container py-5">

    <div class="row g-4">

      <!-- {{-- Card Pets --}} -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h4>Seus Pets Cadastrados</h4>
          <p>Clique aqui para consultar seus pets cadastrados.</p>
          <a href="{{ route('tutor.pets') }}" class="btn btn-dark">Ver pets</a>
        </div>
      </div>

      <!-- {{-- Card Exames --}} -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h4>Exames</h4>
          <p>Consulte os exames já feitos do seu pet.</p>
          <a href="#" class="btn btn-dark">Ver exames</a>
        </div>
      </div>

      <!-- {{-- Espaço para mais itens no futuro --}} -->
      <div class="col-md-6 col-lg-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h4>Outros serviços</h4>
          <p>Em breve você poderá acessar novas funções aqui.</p>
          <a href="#" class="btn btn-secondary disabled">Em breve</a>
        </div>
      </div>

    </div>

  </div>
</section>

@endsection