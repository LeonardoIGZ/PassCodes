@extends('layout')

@section('title', 'Visualizar')

@section('content')

    <div class="container">
        <h1 class="text-center mb-2">Visualizar</h1>

        <div class="d-flex justify-content-center">
            @isset($passCodes)
                <table class="table table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passCodes as $passCode)
                            <tr>
                                <td>{{ $passCode->id }} </td>
                                <td>{{ $passCode->author }}</td>
                                <td>{{ $passCode->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <li>No hay PassCodes para mostar</li>
            @endif
        </div>
    </div>

    @endsection
