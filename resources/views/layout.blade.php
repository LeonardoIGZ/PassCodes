<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Aprendible')</title>
    <link rel="stylesheet" href="{{ asset('js/validation.js') }}">
    <script>
        function verificar(valor) {
            //Guardamos el valor del id='passcode'
            passcode = document.getElementById("passcode").value;
            //Cuando la cadena sea igual a 5 se ejecutan las instrucciones 
            if (passcode.length == 5) {
                //document.getElementById("count").value = document.getElementById("passcode").value;
                //Enviar el formulario a la ruta establesida.
                document.all["form_validar"].submit();
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
    @include('partials.navigation')
    @yield('content')
    <script src="js/app.js"></script>
</body>

</html>
