@extends('layouts.app')
@section('content')
<div class="wrapper pizza-index">
<h1>Pizza Orders</h1>
@foreach( $pizz as $pizza)
<div class="pizza-item">
<img src="/img/pizza.png" alt="pizazaa  ">
<h4> <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
  
</div>
@endforeach
</div> 

@endsection 