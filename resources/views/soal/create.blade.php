@extends('components.soalHead')

@section('soal-create')
<h1>Add Item to quiz: {{ $quiz->title }}</h1>
    <form action="{{ route('quiz.soal.store', $quiz->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <button type="submit">Add Item</button>
    </form>
    <a href="{{ route('quiz.soal.index', $quiz->id) }}">Back to soal</a>


@endsection
