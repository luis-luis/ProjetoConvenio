<!doctype html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo site convenio</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Principal CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

    <!-- Estilos customizados para outras paginas -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- <link href="css/custom.css" rel="stylesheet"> Sobrescreve estilos -->

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>

<body>
    @yield('content')

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="container"> <!-- Adicionei uma div container -->
        <div class="row">
            <div class="col-12 col-md">
                <svg class="mb-2" alt="" width="24" height="19"></svg>
                <small class="d-block mb-3 text-body-secondary">&copy; 2025. Todos os direitos reservados.</small>
            </div>
        </div>
    </div> <!-- Fechando corretamente a div -->
</footer>



    @yield('javascript')

    <!-- Principal JavaScript do Bootstrap
================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('color-modes.js')}}"></script>

</body>

</html>