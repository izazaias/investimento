<!DOCTYPE html>
<html>
<head>
    <title>Resultados da Simulação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Resultados da Simulação</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p><strong>Tipo de Investimento:</strong> {{ $tipo }}</p>
                        <p><strong>Valor Inicial:</strong> R$ {{ number_format($valor, 2, ',', '.') }}</p>
                        <p><strong>Tempo:</strong> {{ $tempo }} anos</p>
                        <p><strong>Retorno Estimado:</strong> R$ {{ number_format($retorno, 2, ',', '.') }}</p>
                        <a href="{{ url('/investimentos') }}" class="btn btn-primary mt-3 w-100">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
