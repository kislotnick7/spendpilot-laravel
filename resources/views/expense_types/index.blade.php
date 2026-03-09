@extends('layouts.app')

@section('content')
    <div>
        <h1>Типы расходов</h1>

        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <div style="margin: 16px 0;">
            <a href="{{ route('expense-types.create') }}">+ Добавить тип</a>
        </div>

        <table border="1" cellpadding="8">
            <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($expenseTypes as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>
                        <a href="{{ route('expense-types.edit', $type) }}">Редактировать</a>
                        <form action="{{ route('expense-types.destroy', $type) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
