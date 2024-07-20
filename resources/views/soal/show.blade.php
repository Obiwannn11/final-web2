@extends('components.soalHead')

@section('soal-show')

@section('content')
    <h1>{{ $soal->name }}</h1>
    <a href="{{ route('soal.edit', $soal->id) }}">Edit soal</a>
    <form action="{{ route('soal.destroy', $soal->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete soal</button>
    </form>
    <a href="{{ route('categories.soal.index', $soal->category_id) }}">Back to soal</a>

@endsection
