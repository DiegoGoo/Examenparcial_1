@extends('layouts.app')
@section('content')

<div class="ui container">

<br><br>
<div class="ui cards">


@foreach( $Bicicletas as $bicicleta)


<div class="card">
    <div class="content">
      <img class="right floated mini ui image" src="https://w7.pngwing.com/pngs/817/5/png-transparent-bicycle-shop-cycling-mountain-biking-bicycle-bicycle-logo-mountain-biking.png">
      <div class="header">
        {{$bicicleta["nombre"]}}
      </div>
      <div class="meta">
        La mejor Bicicleta para ti
      </div>
      <div class="description">
        <p>Tipo:  {{ $bicicleta["descripcion"] }} </p>
        <p>Color:  {{ $bicicleta["color"] }} </p>
        <p>Precio:  {{ $bicicleta["precio"] }} </p>      </div>
    </div>
    <div class="extra content">
      <div class="ui two buttons">
        <div class="ui basic green button">Approve</div>
        <div class="ui basic red button">Decline</div>
      </div>
    </div>
  </div>

@endforeach

</div>

</div>
@stop