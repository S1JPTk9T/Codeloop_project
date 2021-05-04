@extends('dependencies.index')


@section('menu')
<div class="container">
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Left</button>
    <button type="button" class="btn btn-primary">Middle</button>
    <button type="button" class="btn btn-primary">Right</button>
  </div>
</div>
@endsection

@section('onejs')
  <script language="javascript" src="{{asset('js/1.js')}}"></script>
@endsection

@section('table')
<table id="data">

</table>
@endsection
