@extends('layout')

@section('title', 'Generar')

@section('content')
    <div class="container">
        <h1 class="text-center mb-2">Generar</h1>
        <form method="POST" action="{{ route('generar.store') }}" class="row g-3">
            @csrf
            <div class="col-12">
                <label for="athour" class="form-label">Autor del PassCode: </label><br>
                <input name="author" id="author" type="text" value="{{ old('author') }}" class="form-control"><br>
                {!! $errors->first('author', '<small style="color: red">:message</small><br>') !!}
            </div>
            <div class="col-12">
                <label for="passcode" class="form-label">PassCode: </label><br>
                <input name="passcode" id="passcode" type="password" maxlength="5" class="form-control"><br>
                {!! $errors->first('passcode', '<small style="color: red">:message</small><br>') !!}
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Crear</button>
            </div>
        </form>
    </div>

@endsection
