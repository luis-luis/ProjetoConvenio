@extends('layout.main2')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('login.perform') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label class="form-check-label" for="remember">Lembrar-me</label>
                        </div>

                        <div class="form-group d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                        </div>

                        <hr>

                        <p class="m-0">Não tem conta? <a href="{{ route('register') }}">Crie uma agora</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
