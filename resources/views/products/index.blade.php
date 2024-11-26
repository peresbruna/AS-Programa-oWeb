@extends('layouts.base')

@section('content')
@foreach($products as $product)
    <div>
        <h3>{{ $product->description }}</h3>
        <p>{{ $product->price }}</p>
        <a href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
        <form action="{{ url('products/'.$product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection