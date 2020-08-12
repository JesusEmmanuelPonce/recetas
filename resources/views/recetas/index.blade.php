@extends('layouts.app')

@section('content')
    <h1>
        Recetas
    </h1>

    @foreach ($recetas as $item)
        <li>{{ $item }}</li>
    @endforeach
@endsection
