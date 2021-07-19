<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Base Crud</title>

        {{-- bootstrap 4.6.0 with CDNJS (ctrl-p + ">" + "search libraries") --}}
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.css' integrity='sha512-Mg1KlCCytTmTBaDGnima6U63W48qG1y/PnRdYNj3nPQh3H6PVumcrKViACYJy58uQexRUrBqoADGz2p4CdmvYQ==' crossorigin='anonymous'/>
        <!-- Fonts - Google Roboto 400 700-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


    </head>
    <body>

        {{-- Header --}}
        @include('partials.header')

        <main class="my-5">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
        
        {{-- bootstrap 4.6.0 - javascript - bootrsap.js with CDNJS (ctrl-p + ">" + "search libraries") --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.js' integrity='sha512-nw7zwODD4UD9u/C/CO+03s7jXvOZDomBNFX3oOq7Xv0stAyxsxhJzVlxsRTgH3AxK3sK2ijMQou2aSIaorp19g==' crossorigin='anonymous'></script>
    </body>
</html>