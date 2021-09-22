<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報編集</h1>
        @if ($errors->any())
            <div class="error">
                <p>
                    <b>エラーがあります｡</b>
                </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- 更新先はitemsのidにしないと増える php artisan rote:listで確認① -->
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        <!-- formタグはPUTやDELETEをサポートしていないため、@methodで指定する必要がある -->
        @method('PATCH')
        <p>
            <label for="name_ja">名前</label>
            <input type="text" name="name_ja" value="{{ old('name_ja', $planet->name_ja) }}">
        </p>
        <p>
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" value="{{ old('name_en', $planet->name_en) }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="seller">重量</label>
            <input type="text" name="seller" value="{{ old('weight', $planet->weight) }}">
        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
