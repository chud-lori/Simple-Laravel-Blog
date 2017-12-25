<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="/css/super.css">
  </head>
  <body>
    <header>
      <nav>
        <a href="/">Beranda</a>
        <a href="/blog">Blog</a>
      </nav>
    </header>
    <br>

    @yield('konten')

    <br>
    <footer>
      <p>
        &copy; Laravel and Chudlori 2017
      </p>
    </footer>

    <script src="/js/utama.js"></script>

  </body>
</html>
