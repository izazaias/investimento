<!DOCTYPE html>
<head>
    <title>Investimentos</title>
</head>
<body>
    <h1>Investimentos</h1>
    <ul>
        @foreach ($investimentos as $investimento)
            <li>
                <a href="{{ route('investimentos.show', $investimento['id']) }}"></a>
            </li>
        @endforeach
    </ul>
</body>
</html>