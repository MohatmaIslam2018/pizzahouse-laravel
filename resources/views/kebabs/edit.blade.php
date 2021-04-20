@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new Kebab</h1>
    <form action="/kebabs/update" method="POST">
    
        @csrf
        @method('PUT')
        
        <input type="text" name="id" id="id" value="{{ $kebab->id }}">

        <label for="name">Your name</label>
        <input type="text" name="name" id="name" value="{{ $kebab->name }}">

        <label for="type">Choose your kebab</label>

        <select name="type" id="type">
            <option value="{{ $kebab->type }}" disabled selected>{{ $kebab->type }} </option>            
            <option value="arabian">Arabian</option>
            <option value="turkish">Turkish</option>
            <option value="american">American</option>
        </select>

        <label for="filling">Choose your filling</label>
        
        <select name="filling" id="filling">
            <option value="{{ $kebab->filling }}" disabled selected>{{ $kebab->filling }}</option>
            <option value="shredded chicken">Shredded Chicken</option>
            <option value="minced beef">Minced Beef</option>
            <option value="mix vegetable">Mix Vegetables</option>
        </select>

        <br> Your Selected Sides:
        <ul>
        @foreach($kebab->sides as $side)
            <li>
                {{ $side }}
            </li>
        @endforeach
        </ul>

        <label for="sides">Update Sides:</label>
        <input type="checkbox" name="sides[]" value="coke"> Coke <br>
        <input type="checkbox" name="sides[]" value="fanta"> Fanta <br>
        <input type="checkbox" name="sides[]" value="chocolate cookey"> Chocolate cookey <br>
        <input type="checkbox" name="sides[]" value="coleslaw"> Coleslaw <br>

        <input type="submit" value="Order Kebab">
    </form>
</div>
@endsection