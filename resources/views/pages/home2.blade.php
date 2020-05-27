@extends('layouts.app')
@section('content')

<br><br>
<div class="ui container">
<div class="ui list">


@foreach( $Clientes as $cliente)
<div class="item">
    <img class="ui avatar image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSO9buGXBWk9oKCkzMhedV6jdQDPW9Gv68I2z6XsQHbYAsu360L&usqp=CAU">
    <div class="content">
      <a class="header">{{$cliente["Nombre"]}}</a>
      <div class="description"> <p>Telefono: {{$cliente["Telefono"]}}</p> </div>
    </div>
  </div>

@endforeach

</div>
</div>
@stop
