@extends('layouts.base')
@section('title', 'Agregar')

@section('content')
    <!-- Content here -->
    <div class="card text-center m-4">
        <div class="card-header">
            Nuevo Libro
        </div>
        <form action="{{ isset($libro) ?  url('/libros/update/'.$libro->id.'') : url('libros/store')}}" method="POST" role="form" >
            @if (isset($libro))
               {{method_field('PUT')}}    
            @endif  
          
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" @if(isset($libro)) value="{{$libro->titulo}}" @endif>
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" @if(isset($libro)) value="{{$libro->editorial}}" @endif>
            </div>
            <div class="mb-3">
                <label for="edicion" class="form-label">Edición</label>
                <input type="text" class="form-control" id="edicion" name="edicion" @if(isset($libro)) value="{{$libro->edicion}}" @endif>
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" @if(isset($libro)) value="{{$libro->ISBN}}" @endif>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="card-footer text-muted m-2">
        </div>
    </div>
@endsection 