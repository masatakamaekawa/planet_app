<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>エラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>惑星情報登録</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="name_ja">名前<input type="text" name="name_ja"
                    value="{{ old('name_ja', $planet->name_ja) }}"></label>
        </p>
        <p>
            <label for="name_en">名前(英語)<input type="text" name="name_en"
                    value="{{ old('name_en', $planet->name_en) }}"></label>
        <p>
            <label for="radius">半径<input type="text" name="radius"
                    value="{{ old('radius', $planet->radius) }}"></label>
        </p>
        <p>
            <label for="weight">重量<input type="text" name="weight"
                    value="{{ old('weight', $planet->weight) }}"></label>
        </p>
        <p>

            <input type="submit" value="更新">
        <p><b><a href="/planets">戻る</a></b></p>
    </form>
</body>

</html>
