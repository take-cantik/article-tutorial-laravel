<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>article-tutorial</title>
  </head>
  <body>
    <header>
      @include('header')
    </header>
    <main>
      @yield('content')
    </main>
  </body>
</html>
