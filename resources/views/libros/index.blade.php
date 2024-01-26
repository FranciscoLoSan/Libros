@extends('layouts.base')
@section('title', 'Libros')

@section('content')<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Edición</th>
                <th scope="col">ISBN</th>
                <th scope="col">Actions</th>
                <th scope="col"><a href="{{ url('/libros/create') }}" class="btn btn-success">Agregar</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{ $libro->id }}</th>
                    <td>
                        {{ $libro->titulo }}

                    </td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->edicion }}</td>
                    <td>{{ $libro->ISBN }}</td>
                    <td>

                        <a class="btn btn-primary float-left" href="{{ url('libros', [$libro->id]) }}"> Show </a>
                        <a class="btn btn-warning float-left ml-1" href="{{ url('libros', [$libro->id, 'edit']) }}"> Edit </a>

                        <form class="btn float-left" action="{{ url('libros/destroy/' . $libro->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger"> Delete </button>
                        </form>
                    </td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
