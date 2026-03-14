<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <div class="inner">
      <span class="logo">Bountea</span>
      <nav>
        <ul>
          <li><a href="/">Главнейшая</a></li>
          <li><a href="about">Про нас</a></li>
          <li><a href="contact">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="content">
    @yield('content')
  </div>
  <footer class="main-footer">
    <span>Не все права защищены</span>
</footer>
</body>
</html>