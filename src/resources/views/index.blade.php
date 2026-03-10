@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
@foreach($todos as $todo)
<tr class="table__row">
    <td>
        <form action="/todos/{{ $todo -> id }}" method="post">
            @csrf
            @method('patch')
            <input class="table__row-content" type="text" name="content" value="{{ $todo -> content }}">
            <button class="table__row-update" type="submit">更新</button>
        </form>
    </td>
    <td>
        <form action="/todos/{{ $todo -> id }}" method="post">
            @csrf
            @method('delete')
            <button class="table__row-delete" type="submit">削除</button>
        </form>
    </td>
</tr>
@endforeach
@endsection