@extends('layout.base')

@section('title', 'Modification')
@section('main')
  <h1>Modification d'un chat</h1>
  {!! Form::open(['url' => '/cat/update']) !!}
    {{{ Form::hidden('id', $cat->id) }}}
    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $cat->name) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('size', $cat->size) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids') }}}
      {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('age', $cat->age) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, $cat->gender->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur', 'Couleur', ['class' => 'align-top']) }}}
      {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Mettre à jour', ['class' => 'btn btn-outline-success']) }}}
    </div>


  {!! Form::close() !!}
@endsection
