<!DOCTYPE html>
<html>
<head>
    <title>Simular Investimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Simulador de Investimento: {{ $tipo }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/investimentos/resultados') }}" method="POST">
                            @csrf
                            <input type="hidden" name="tipo" value="{{ $tipo }}">
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor do Investimento:</label>
                                <input type="number" name="valor" id="valor" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tempo" class="form-label">Tempo (em anos):</label>
                                <input type="number" name="tempo" id="tempo" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Simular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
