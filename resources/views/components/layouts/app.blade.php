<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pDoxa20 - {{$name}}</title>
    
    @vite(['resources/js/app.js'])
</head>
<body>
    {{-- Navegador --}}
    <x-layouts.navigation />

    @if (session('status'))
          <div class="alert alert-success">{{session('status')}}</div>
      
    @endif
    <div class="ms-4">
        <h1>{{ $name }}</h1>            
    </div>
    <div class="container-fluid">
        {{ $slot }}

    </div>

    
  
</body>
</html>