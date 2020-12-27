@extends('layouts.app')
@section('content')
<div class="wrapper pizza-details">
<h1>Order for {{ $pizz->name }} </h1>
<p class="type">Type - {{ $pizz->type }} </p>
<p class="base">Type - {{ $pizz->base }} </p>
<p class="toppings" > Exra toppings:</p>
<ul>
     @foreach($pizz->toppings as $topping)
     <li> {{ $topping }}</li>
     @endforeach
</ul>
<form action="/pizzas/{{ $pizz->id }}" method="POST">
@csrf
@method('DELETE')
<button> Delete order </button>
</form>
</div>
<a href="/pizzas" class="back"> back to all pizzas</a>
@endsection 