<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta charset="utf-8">
    <title>AI Chatbot</title>
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="{{ asset('dist/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset('dist/img/logo.png" type="image/png') }}" rel="icon">
</head>

<body>
    <div id="app" class="layout">
        <main class="main">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('dist/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('dist/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/swipe.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script>
        function scrollToBottom(el) {
            el.scrollTop = el.scrollHeight;
        }
        scrollToBottom(document.getElementById('content'));

    </script>
</body>

</html>
