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
    <header>
        <div>
            <a href="">Todo</a>
        </div>
        <div>
            <span>{{ $massage }}</span>
        </div>
    </header>

    <main>
        <div>
            <div>
                <form action="">
                    @csrf
                    <input type="text">
                    <button>作成</button>
                </form>
            </div>
                <table>
                    <tr>
                        <th>Todo</th>
                    </tr>
                    @yield('content')
                </table>
            <div>

            </div>
        </div>

    </main>
</body>

</html>