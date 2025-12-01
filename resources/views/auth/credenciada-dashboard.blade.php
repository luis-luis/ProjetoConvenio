@extends('layout.main2')
@section('content')
<div class="container py-5">
  <h1>Dashboard da Rede Credenciada</h1>
  <p>Bem-vindo, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
</div>
@endsection
