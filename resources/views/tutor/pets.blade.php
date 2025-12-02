@extends('layout.main2')

@section('content')

<section class="hero-wrap hero-wrap-2 d-flex align-items-center justify-content-center text-center"
  style="background-image: url('/images/dog-1637401_1280.jpg'); height: 70vh; background-size: cover; background-position: center;"
  data-stellar-background-ratio="0.5">

  <div class="overlay"></div>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 ftco-animate">
        <h1 class="mb-3 text-white">Dashboard do Tutor</h1>
        <p class="text-white">Bem vindo, {{ Auth::user()->name }}</p>
      </div>
    </div>
  </div>

</section>

<section>
  <div class="container py-5">
    <h2>Seus Pets Cadastrados</h2>
    <!-- Aqui você pode listar os pets cadastrados pelo tutor -->
    <p>Aqui estarão listados os pets cadastrados pelo tutor.</p>
  </div>
</section>

@endsection