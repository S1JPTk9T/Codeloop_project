@extends('dependencies.menu');



@section('content')
@csrf

<table class="table table-dark table-striped" id="data">
  {{createHeader()}}
  {{showData($data)}}
</table>
<script language="javascript" src="{{asset('js/show.js')}}"></script>
@endsection
