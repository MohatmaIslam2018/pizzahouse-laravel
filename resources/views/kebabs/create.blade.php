@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new Kebab</h1>
    <form action="/kebabs" method="POST">
    
        @csrf
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">

        <label for="type">Choose your kebab</label>
        <select name="type" id="type">
            <option value="arabian">Arabian</option>
            <option value="turkish">Turkish</option>
            <option value="american">American</option>
        </select>

        <label for="filling">Choose your filling</label>
        <select name="filling" id="filling">
            <option value="shredded chicken">Shredded Chicken</option>
            <option value="minced beef">Minced Beef</option>
            <option value="mix vegetable">Mix Vegetables</option>
        </select>

        <label for="sides">Extra Sides:</label>
        <input type="checkbox" name="sides[]" value="coke"> Coke <br>
        <input type="checkbox" name="sides[]" value="fanta"> Fanta <br>
        <input type="checkbox" name="sides[]" value="chocolate cookey"> Chocolate cookey <br>
        <input type="checkbox" name="sides[]" value="coleslaw"> Coleslaw <br>

        <input type="submit" value="Order Kebab">
    </form>
</div>
@endsection