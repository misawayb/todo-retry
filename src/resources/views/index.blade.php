@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<tr>
@foreach($todos as $todo)
    <th>{{ $todo }}</th>
    <td>
        <form action="">
            @csrf
            更新
        </form>
    </td>
    <td>
        <form action="">
            @csrf
            削除
        </form>
    </td>
@endforeach
</tr>
@endsection