@extends('layout.base')

@section('title', 'InWorld Statues 🗽 | Ajout')


@section('content')

<form action="/add" method="POST">
    @csrf
    <div id="container4">
        <h3>Ajout</h3>
        <div>
            <label for="name">Nom : </label>
            <input type="text" name="name" placeholder="Nom">
        </div>
        <div>
            <label for="creation_date">Date de création : </label>
            <input type="text"  name="creation_date" placeholder="Date de création">
        </div>
        <div>
            <label for="origin">Origine : </label>
            <input type="text" name="origin" placeholder="Origine">
        </div>
        <div>
            <label for="price">Prix : </label>
            <input type="text" name="price" placeholder="Prix">
        </div>
        <div>
            <label for="artist_name">Artiste : </label>
            <input type="text" name="artist_name" placeholder="Artiste">
        </div>
        <div>
            <label for="submit"></label>
            <input type="submit" id="submit" name="submit" value="Ajouter">
        </div>
    </div>
</form>
@endsection