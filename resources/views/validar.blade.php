@extends('layout')

@section('title', 'Validar')

@section('content')
    
    <div class="container">
        <h1 class="mb-2">Validar</h1>
        <form action="{{ route('validar.show') }}" method="POST" id="form_validar" class="row g-3">
            @csrf
            <label>PassCode</label><br>
            <input name="passcode" id="passcode" type="password" maxlength="5" minlength="5" required
                onkeyup="verificar(this.value);" {{ ($intentos == 0 ? 'disabled' : '') }}><br>
            {!! $errors->first('passcode', '<small style="color: red">:message</small><br>') !!}
            <label>Intentos</label><br>
            <input type="number" readonly id="count" name="count" value="{{ $intentos }}"></input>
        </form>        
        <p>{{ ($alert === null)? "": $alert; }}</p>
        <script>
            
        </script>
    </div>
@endsection
