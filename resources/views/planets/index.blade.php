<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet index</title>
</head>
<body>
    <h1>惑星一覧</h1>
    <ul>
        <table border="1">
            <tr>
                <th>名前</th>
                <th>名前(英名)</th>
                <th>半径</th>
                <th>重量</th>
                <th></th>
                <th></th>
            </tr>
    <!-- リンク先をidで取得し名前で出力 -->
        @foreach ($planets as $planet)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></li>
            <table border='1'>
                <tr>
                    <td>{{ $planet->name_ja }}</td>
                    <td>{{ $planet->name_en }}</td>
                    <td>{{ $planet->radius }}</td>
                    <td>{{ $planet->weight }}</td>
                    <td><a href="/planets/{{ $planet->id }}">詳細</a></td>
                    <td><a href="/planets/{{ $planet->id }}/edit">編集</a></td>
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></td>
                    </form>
                </tr>
                <a href="/planets/{{ $planet->id }}"></a>
            </table>
        @endforeach
    </ul>
            <!-- 新規登録画面へジャンプする -->
    <a href="/planets/create">新規登録</a>
</body>
</html>