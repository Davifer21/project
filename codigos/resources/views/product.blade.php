@extends('layouts.main')
@section('title', 'produto')
@section('content')
  @if($id != null)
     <p>exibindo produto id: {{ $id }}</p>
  @endif

@endsection