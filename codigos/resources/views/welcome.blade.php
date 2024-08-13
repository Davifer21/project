@extends("layouts.main")

@section("title", "HDC Events")

@section("content")

<div id="search-container" class='col-md-12'>
        <h1>busque um evento</h1>
        <form action="">
             <input type="text" id="search" name="seach" class="form-control" placeholder="procurar...">
        </form>
</div>
<div id="events-container" class="col-md-12">
     <h2>proximos eventos</h2>
     <p>veja os eventos dos proximos dias</p>
     <div id="cards-container" class="row">
        @foreach($events as $event)
        
        </div>

        @endforeach
</div>

  
