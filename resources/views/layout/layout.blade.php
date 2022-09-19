<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="img/40.png">
  <title>Volvo | @yield('title')</title>
  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  @vite("resources/css/app.css")
</head>
<body>
  @include('partials/navbar/_nav')
  @yield('content')
  @include('partials/footer/_footer')
</body>
</html>