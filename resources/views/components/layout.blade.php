<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $namePage ?? 'DEAFULT NAME' }}</title>
</head>
<body>
    
    <!-- se incluye la navegación  -->
    @include('partials.navigation')

    <!-- Se incluye el contenido a renderizar dentro del layout -->
    
        {{ $slot }} <!-- contenido -->

        {{-- @isset($sidebar) --}}
             {{ $sidebar ?? 'default side-bar' }} <!-- sidebar --> 
        {{-- @endisset --}}

    <!-- Fin del contenido a renderizar dentro del layout -->

</body>
</html>