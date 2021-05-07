@extends('dependencies.index')

@section('menu')
<div class="container">
  <div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{asset('data/0')}}"><button type="button" class="btn btn-primary">Mostrar</button></a>
    <a href="{{asset('student/0/data/create')}}"><button type="button" class="btn btn-primary">Criar</button></a>
  
  </div>
</div>

@endsection
