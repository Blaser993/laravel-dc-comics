@extends('layouts.app')

@section('content')

<h2>Inserisci un nuovo Comic</h2>
<div class="container">
    <form action={{ route('comics.store')}} method="POST">
       @csrf 
        

        <h5>Titolo</h5>
        <div class="input-group mb-3">
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}" id="title" placeholder="Inserisci il titolo del nuovo comic" >
            @error('title')
                {{-- <div class="alert alert-danger">{{$message}}</div> --}}
                <div class="invalid-feedback">
                    {{$message}}
                </div>     
            @enderror
        </div>

     
        <h5>Descrizione</h5>
        <div class="input-group mb-3">
            <textarea class="form-control"   name="description" id="description" aria-label="With textarea" placeholder="Inserisci la trama del comic">{{old('description')}}</textarea>
            @error('description')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>     
        @enderror
        </div>

        <h5>Copertina</h5>
        <div class="input-group mb-3">
            <input type="text" name="thumb" value="{{old('thumb')}}" id="thumb" class="form-control" placeholder="Inserisci il link dell'immagine copertina" >
            @error('thumb')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>     
        @enderror
        </div>

        <h5>Prezzo</h5>
        <div class="input-group mb-3">
            <input type="text" name="price" value="{{old('price')}}" id="price" class="form-control" placeholder="Inserisci il prezzo in €" >
            @error('price')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>     
        @enderror
        </div>
        

        <h5>Nome della serie</h5>
        <div class="input-group mb-3">
            <input type="text" name="series" value="{{old('series')}}" id="series" class="form-control" placeholder="Inserisci il nome della serie" >
            @error('series')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>     
        @enderror
        </div>

        <h5>Data della vendita</h5>
        <div class="input-group mb-3">
            <input type="date" name="sale_date" value="{{old('sale_date')}}" id="sale_date" class="form-control">
            @error('sale_date')
            {{-- <div class="alert alert-danger">{{$message}}</div> --}}
            <div class="invalid-feedback">
                {{$message}}
            </div>     
        @enderror
        </div>

        <h5>Tipo di comic</h5>
        <div class="input-group mb-3">
            <select class="form-select @error('type')is-invalid @enderror" name="type" id="type">
                <option selected>Seleziona tipologia</option>
                <option @selected( old('type') == 'graphic') value="graphic">Graphic Novel</option>
                <option @selected( old('type') == 'book') value="book">Comic Book</option>
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        
    </form>
{{-- 
    @if ($error->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>    
    @endif --}}

</div>

@endsection