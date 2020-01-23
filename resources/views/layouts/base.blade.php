<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>BLOG</title>
</head>
<body>
  
  <header>
    <a href="{{ route('home.index') }}">
      <h1>BLOG</h1>
    </a>
  </header>
  
  <div class="content">
    @yield('content')
  </div>

  <footer>
    <p>Bye Bye</p>
  </footer>

</body>
</html>