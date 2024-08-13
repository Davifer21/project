@extends('layouts.main')

@section('title', "criar evento")

@section('content')

<div id="event-create-container" class='col-md-6 offset-md-3'>
    <h1>crie o seu evento</h1>
    <form action="/events" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">evento:</label>
      <input type="text" class="form-control">
    </div>
    </form>
</div>

@endsection 