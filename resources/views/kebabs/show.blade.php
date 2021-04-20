@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{ $kebab->name }}</h1>
    <p class="type">Type - {{ $kebab->type }}</p>
    <p class="filling">Filling - {{ $kebab->filling }}</p>

    <ul>
        @foreach($kebab->sides as $side)
        <li> {{ $side }}</li>
        @endforeach
    </ul>

    <form action="{{ route('kebabs.destroy', $kebab->id) }}" method="POST">
    
        @csrf
        @method('DELETE')

        <button> Complete Order </button>
    
    </form>

    <h4><a href="/kebabs/{{ $kebab->id }}/edit"> Update Details</a></h4>  


    <div class="text-center">
    <a href="/kebabs" class="btn btn-primary"> <<- View All Kebabs</a>
    </div>

</div>

@endsection