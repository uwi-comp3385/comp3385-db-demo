<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>COMP3385 Laravel Demo</title>
    <meta name="description" content="A Basic Laravel Demo app for Framework Design for Advanced Web Development">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <script src="" charset="utf-8"></script>
  </head>
  <body>
    <header>
        <h1>COMP3385 Laravel Database Demo</h1>
        <p>A Basic Laravel Demo app for Framework Design for Advanced Web Development</p>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
            </ul>
        </div>
    </nav>
    <div class="flex-wrapper container">
      <main>
        @yield('content')
      </main>

      <aside>
        @section('sidebar')
            <h2>Sidebar</h2>
        @show
      </aside>
    </div>

    <footer>
        <div class="container">
            Copyright &copy; 2024, COMP3385 Inc.
        </div>
    </footer>
  </body>
</html>
