@extends('layout.base')

@section('title', 'InWorld Statues 🗽 | Nos statues')


@section('content')


<h2>Nos statues</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th >Date de création</th>
            <th >Origine</th>
            <th >Prix</th>
            <th >Artiste</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($statues as $statue)
            <tr>
              <td>{{$statue->name}}</td>
              <td>{{$statue->creation_date}}</td>
              <td>{{$statue->origin}}</td>
              <td>{{$statue->price}}</td>
              <td>{{$statue->artist_name}}</td>
              <td>
                  <form action="/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$statue->id}}">
                    <input type="submit" value="Modifier">
                  </form>
                </td>
                <td>
                  <form action="/delete" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$statue->id}}">
                    <input type="submit" value="Supprimer">
                  </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 
@endsection