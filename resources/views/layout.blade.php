<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>@yield('page_title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
 </head>
 <body>
    <header>
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center mb-4 border-bottom">
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none {{ (request()->is('/')) ? 'fw-bold' : 'fw-light' }}" href="/">Главная страница</a>
                <a class="me-3 py-2 text-dark text-decoration-none {{ (request()->is('articles*')) ? 'fw-bold' : 'fw-light' }}" href="/articles">Каталог статей</a>
              </nav>
            </div>
        </div>
    </header>
    <div class="container">   
        @yield('main_content')
    </div>
 </body>
</html>