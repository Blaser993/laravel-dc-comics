@extends('layouts.app')

@section('content')

<div class="px-5">
    <table class="table">
    
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Copertina</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data vendita</th>
                <th scope="col">Tipo</th>
                <th scope="col">link al fumetto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr class="align-middle">
                <th scope="row">{{$comic->id}}</th>
                <td scope="row">{{$comic->title}}</td>
                <td scope="row">{{$comic->description}}</td>
                <td scope="row"><img class="copertina" src="{{$comic->thumb}}" alt=""></td>
                <td scope="row">{{$comic->price}}</td>
                <td scope="row">{{$comic->series}}</td>
                <td scope="row">{{$comic->sale_date}}</td>
                <td scope="row">{{$comic->type}}</td>
                <td scope="row">
                    <button>
                        <a href="{{route('comics.show', $comic)}}">vedi</a>
                    </button>
                    <button>
                        <a href="{{route('comics.edit', $comic)}}">modifica</a>
                    </button>
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    <button>
        <a href="{{route('comics.create', $comic)}}">Aggiungi un nuovo comic</a>
    </button>

</div>

    
@endsection