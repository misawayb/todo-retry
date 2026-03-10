<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__top">
            <a class="header__logo" href="/">Todo</a>
        </div>
        <div class="header__bottom">
            @if(session('message'))
            <div class="header__bottom-green">{{ session('message')  }}</div>
            @endif
            @if($errors -> any())
            <div class="header__bottom-red">
                @foreach ( $errors ->all() as $error )
                {{ $error }}
                @endforeach
            </div>
            @endif
        </div>
    </header>

    <main>
        <div class="content">
            <div class="form__create">
                <form action="/todos" method="post">
                    @csrf
                    <input class="form__create-input" type="text" name="content">
                    <button class="form__create-button" type="submit">作成</button>
                </form>
            </div>
            <table class="table">
                <tr>
                    <th class="table__title">Todo</th>
                </tr>
                @yield('content')
            </table>
            <div>

            </div>
        </div>

    </main>
</body>

</html>