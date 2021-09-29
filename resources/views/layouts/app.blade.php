<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" name="twitter:" content="">
    <meta name="author" content="Ефименко Андрей">
    <meta name="description" content="Тестовая страница">
    <meta name="keywords" content="Тест, проверка, html">

    <title>@yield('title_block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

  </head>

  <body>
    @include('inc.header')

    @if(Request::is('/'))
      @include('inc.hero')
    @endif



    <div class="container mt-5">
      @include('inc.messages')
      <div class="row">
        <div class="col 8">
          @yield('content')
        </div>

      </div>
    </div>

    @include('inc.footer')

  </body>
</html>
