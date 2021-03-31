<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stuck Never Flow') }}</title>

    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Stuck Never Flow') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="/stock-online-unit">Stock Online Unit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/sales-order">Sales Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/penjualan-cabang">Penjualan Cabang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/insentif-salesman">Insentif Salesman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/spk-valid">SPK Valid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/rekap-spk">Rekap SPK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/laporan-gabung-bengkel">Laporan Gabung Bengkel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/part-purchase-order">Part Purchase Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/part-good-receipt">Part Good Receipt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        $(document).ready(function(){
          var start_date = $('input[name="start_date"]');
          var end_date = $('input[name="end_date"]');
          var container = $('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          var options = {
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
          };
          
          start_date.datepicker(options);
          end_date.datepicker(options);
        })
    </script>
</body>
</html>
