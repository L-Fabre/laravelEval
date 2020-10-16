@extends('layout.base')

@section('title', 'InWorld Statues 🗽 | Modification')


@section('content')

<h2>Modification</h2>
<form action="/editOne" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$statue->id}}">
    <div>
        <label for="title">Nom :</label>
        <input type="text" name="name" placeholder="Nom" value="{{ $statue->name }}">
    </div>
    <div>
        <label for="creation_date">Date :</label>
        <input type="text" name="creation_date" placeholder="Date de création" value="{{ $statue->creation_date }}">
    </div>
    <div>
        <label for="origin">Origine :</label>
        <input type="text" name="origin" placeholder="Origine" value="{{ $statue->origin }}">
    </div>
    <div>
        <label for="synopsis">Prix :</label>
        <input type="text" name="price" placeholder="Prix" value="{{ $statue->price }}">
    </div>
    <div>
        <label for="parution_date">Artiste :</label>
        <input type="text" name="artist_name" value="{{ $statue->artist_name }}">
    </div>
    
    <div>
        <label for="submit"></label>
        <input type="submit" id="submit" name="submit" value="Modifier">
    </div>
</form>
@endsection