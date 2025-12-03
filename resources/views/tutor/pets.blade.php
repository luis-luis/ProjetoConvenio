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
    <div class="accordion" id="accordionExample">

      @forelse($animais as $index => $animal)

      <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $index }}">
          <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapse{{ $index }}"
            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
            aria-controls="collapse{{ $index }}">
            {{ $animal->nome }}
          </button>
        </h2>

        <div id="collapse{{ $index }}"
          class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
          aria-labelledby="heading{{ $index }}"
          data-bs-parent="#accordionExample">

          <div class="accordion-body">
            <p><strong>Espécie:</strong> {{ $animal->especie }}</p>
            <p><strong>Raça:</strong> {{ $animal->raca }}</p>
            <p><strong>Idade:</strong> {{ $animal->idade }}</p>
            <p><strong>Peso:</strong> {{ $animal->peso }}</p>
          </div>
        </div>
      </div>

      @empty

      <div class="alert alert-info mt-3" role="alert">
        Você ainda não cadastrou nenhum pet.
      </div>

      @endforelse

    </div>

  </div>

  </div>
</section>

@endsection