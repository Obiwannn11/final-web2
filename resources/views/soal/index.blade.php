@extends('components.soalHead')

@section('soal-index')

<h1>soal in quiz: {{ $quiz->title }}</h1>
<a href="{{ route('quiz.soal.create', $quiz->id) }}">Add Item</a>
<ul>
    @foreach ($soal as $item)
        <li>
            {{ $item->name }}
            <a href="{{ route('soal.show', $item->id) }}">View</a>
            <a href="{{ route('soal.edit', $item->id) }}">Edit</a>
            <form action="{{ route('soal.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
<a href="{{ route('quiz.index') }}">Back to quiz</a>

@endsection
