@extends('layouts.main')

@section('content')
    @foreach ($artikels as $artikel)
        <div>
            <h2>{{ $artikel['Judul'] }}</h2>
            <p>{{ $artikel['Isi'] }}</p>
        </div>
    @endforeach
@endsection