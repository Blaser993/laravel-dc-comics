@extends('layouts.app')

@section('content')
  {{$comic}}

  <button>
      <a href="{{route('comics.edit', $comic)}}">modifica</a>
  </button>
  <form action="{{route('comics.destroy', $comic)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina">
  </form>
@endsection