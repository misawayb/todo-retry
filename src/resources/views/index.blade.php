@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
@foreach($todos as $todo)
<tr>
    <td>
        <form action="/todos/{{ $todo -> id }}" method="post">
            @csrf
            @method('patch')
            <input type="text" name="content" value="{{ $todo -> content }}">
            <button type="submit">更新</button>
        </form>
    </td>
    <td>
        <form action="/todos/{{ $todo -> id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
    </td>

</tr>
@endforeach
@endsection