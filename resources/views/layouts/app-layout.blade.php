<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pagina de prueba' }}</title>
      <script src="https://cdn.tailwindcss.com"></script>
      @stack('css')
</head>
<body>
    <div class="container mx-auto bg-slate-300 py-8 min-h-dvh">
      @yield('content')
    </div>
</body>
</html>