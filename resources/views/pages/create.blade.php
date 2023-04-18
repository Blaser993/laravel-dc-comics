@extends('layouts.app')

@section('content')

<h2>Inserisci un nuovo Comic</h2>
<div class="container">
    <form action={{ route('comics.store')}} method="POST">
       @csrf 
        
        


        <h5>Titolo</h5>
        <div class="input-group mb-3">
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo del nuovo comic" >
        </div>

     
        <h5>Descrizione</h5>
        <div class="input-group mb-3">
            <textarea class="form-control"   name="description" id="description" aria-label="With textarea" placeholder="Inserisci la trama del comic"></textarea>
        </div>

        <h5>Copertina</h5>
        <div class="input-group mb-3">
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci il link dell'immagine copertina" >
        </div>

        <h5>Prezzo</h5>
        <div class="input-group mb-3">
            <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo in €" >
        </div>
        

        <h5>Nome della serie</h5>
        <div class="input-group mb-3">
            <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci il nome della serie" >
        </div>

        <h5>Data della vendita</h5>
        <div class="input-group mb-3">
            <input type="date" name="sale_date" id="sale_date" class="form-control">
        </div>

        <h5>Nome della serie</h5>
        <div class="input-group mb-3">
            <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci il genere del comic" >
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        
    </form>
</div>

@endsection