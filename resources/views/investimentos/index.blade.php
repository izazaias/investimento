<!DOCTYPE html>
<html>
<head>
    <title>Investimentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Escolha seu Tipo de Investimento</h1>
        <div class="row justify-content-center">
            @foreach ($opcoes as $opcao)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $opcao }}</h5>
                            <a href="{{ url('/investimentos/simular?tipo=' . $opcao) }}" class="btn btn-primary">Simular {{ $opcao }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
