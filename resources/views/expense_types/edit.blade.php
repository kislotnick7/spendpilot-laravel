@extends('layouts.app')

@section('content')
    <div>
        <h1>Редактировать тип расхода</h1>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('expense-types.update', $expenseType) }}">
            @csrf
            @method('PUT')
            <div>
                <label>Название</label><br>
                <input type="text" name="name" value="{{ old('name', $expenseType->name) }}">
            </div>
            <div>
                <label>Описание</label><br>
                <textarea name="description">{{ old('description', $expenseType->description) }}</textarea>
            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
@endsection
