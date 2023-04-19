@extends('layouts.app')

@section('content')

<h2>Modifica le informazioni</h2>
<div class="container">
    <form action={{ route('comics.update', $comic)}} method="POST">
        @csrf 
        @method('PUT')
        


        <h5>Titolo</h5>
        <div class="input-group mb-3">
            <input value="{{ old('title',$comic->title) }}" type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo del nuovo comic" >
            @error('sale_date')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror 
        </div>

     
        <h5>Descrizione</h5>
        <div class="input-group mb-3">
            <textarea  class="form-select @error('title')is-invalid @enderror" name="description" id="description" aria-label="With textarea" placeholder="Inserisci la trama del comic"> {{ old('description',$comic->description) }} </textarea>
        </div>

        <h5>Copertina</h5>
        <div class="input-group mb-3">
            <input class="form-select @error('thumb')is-invalid @enderror" type="text" value="{{ old('thumb',$comic->thumb) }}" name="thumb" id="thumb" placeholder="Inserisci il link dell'immagine copertina" >
        </div>

        <h5>Prezzo</h5>
        <div class="input-group mb-3">
            <input class="form-select @error('price')is-invalid @enderror" type="text" value="{{ old('price',$comic->price) }}" name="price" id="price" placeholder="Inserisci il prezzo in €" >
        </div>
        

        <h5>Nome della serie</h5>
        <div class="input-group mb-3">
            <input class="form-select @error('series')is-invalid @enderror" type="text" value="{{ old('series',$comic->series)}}" name="series" id="series" placeholder="Inserisci il nome della serie" >
        </div>

        <h5>Data della vendita</h5>
        <div class="input-group mb-3">
            <input class="form-select @error('sale_date')is-invalid @enderror" type="date" value='{{old('sale_date',$comic->sale_date)}}' name="sale_date" id="sale_date">
            
        </div>


        <h5>Tipo di comic</h5>
        <div class="input-group mb-3">
            <select class="form-select @error('type')is-invalid @enderror" name="type" id="type">
                <option selected>Seleziona tipologia</option>
                <option @selected( old('type',$comic->type) == 'graphic') value="graphic">Graphic Novel</option>
                <option @selected( old('type',$comic->type) == 'book') value="book">Comic Book</option>
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
        
    </form>

  
</div>

@endsection