@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Treni</h1>
    
        @foreach ($trains as $train)
        <ul class="mx-5 my-5 ">
            <li>Compagnia: {{ $train -> company }}</li>
            <li>Partenza: {{ $train -> departure_station }}</li>
            <li>Arrivo: {{ $train -> arrival_station }}</li>
            <li>Treno N: {{ $train -> train_code }}</li>
            <li>Orario partenza: {{ $train -> departure_time }}</li>
            <li>Orario arrivo: {{ $train -> arrival_time }}</li>
        </ul>
        @endforeach
    
</main>

@endsection
