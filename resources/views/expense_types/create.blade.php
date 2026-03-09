@extends('layouts.app')

@section('content')
    <div>
        <h1>Новый тип расхода</h1>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('expense-types.store') }}">
            @csrf
            <div>
                <label>Название</label><br>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label>Описание</label><br>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
