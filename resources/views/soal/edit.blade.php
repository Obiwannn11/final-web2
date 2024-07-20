@extends('components.soalHead')

@section('soal-edit')

<h1>Edit soal</h1>
<form action="{{ route('soal.update', $soal->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $soal->name) }}" required>
    </div>
    <button type="submit">Update soal</button>
</form>

@endsection
