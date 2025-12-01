@extends('layout.main2')
@section('content')
<div class="container py-5">
  <h1>Dashboard do Tutor</h1>
  <p>Bem-vindo, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
</div>
@endsection
