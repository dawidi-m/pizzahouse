@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
<h1>create a new pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">Your name:</label>
<input type="text" id="name" name="name">
<label for="type">Choose a Pizza type:</label>
<select name="type" id="type">
<option value="Hawaian">Hawaian</option>
<option value="Haitian">Haitian</option>
<option value="Dominican">Dominican</option>
</select>

<label for="base">Choose a Base type:</label>
<select name="base" id="base">
<option value="cheese with cherry">cheese with cherry</option>
<option value="cheese with banana">cheese with banana</option>
<option value="cheese with avocado">cheese with avocado</option>
</select>
<fieldset>
<label> extra toppings:</label>
<input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br/>
<input type="checkbox" name="toppings[]" value="ketchup"> Ketchup <br/>
<input type="checkbox" name="toppings[]" value="mayonnaise"> Mayonnaise <br/>
</fieldset>

<input type="submit" value="Order Pizza">
</form>
</div>
@endsection 