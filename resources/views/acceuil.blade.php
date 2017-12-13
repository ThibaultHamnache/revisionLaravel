@extends('layout.base')

@section('title', 'Acceuil')
@section('main')
  <h1>Ma liste de chats</h1>



  <table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">Noms</th>
        <th scope="col">Ages</th>
        <th scope="col">Taille</th>
        <th scope="col"><i class="fa fa-balance-scale" aria-hidden="true"></i> Poids</th>
        <th scope="col"><i class="fa fa-venus-mars" aria-hidden="true"></i> Sexe</th>
        <th scope="col">Couleurs</th>
        <th scope="col">Supprimer</th>
        <th scope="col">Mettre à jour</th>


      </tr>
    </thead>

    <tbody>
      @foreach ($cats as $cat)
        <tr>
          <td>{{ $cat->name }}</td>
          <td>{{ $cat->age }}</td>
          <td>{{ $cat->size }} cm</td>
          <td>{{ $cat->weight }} kg</td>
          @if ($cat->gender)
            <td>{{ $cat->gender->gender }}</td>
          @else
            <td>Inconnu</td>
          @endif

          @if ($cat->colors)
            <td>
              @foreach ($cat->colors as $color)
                {{{ $color->color }}}
              @endforeach
            </td>
          @else
            <td>Invisible</td>
          @endif
          <td>
            <form action="/cat/delete/{{$cat->id}}" method="GET">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-danger delete-btn">
                <i class="fa fa-times" aria-hidden="true"></i>
              </button>
            </form>
          </td>
          <td>
            <form action="/cat/update/{{$cat->id}}" method="GET">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-info delete-btn">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>

@endsection
