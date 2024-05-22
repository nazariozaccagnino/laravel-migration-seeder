@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Trains</h1>
    @foreach ($trains as $train)
    <ul>
        <li>
            {{$train->company}}
        </li>
    </ul>
    
    @endforeach
</section>

@endsection
