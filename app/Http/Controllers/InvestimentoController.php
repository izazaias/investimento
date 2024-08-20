<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestimentoController extends Controller
{
    public function index()
    {
        // escreve o codigo aqui
        $opcoes = ['Renda Fixa', 'Ações', 'Fundos Imobiliários'];
        return view('investimentos.index', compact('opcoes'));
    }

    public function simular(Request $request)
    {
        // escrever codigo aqui
        $tipo = $request->query('tipo');
        return view('investimentos.simular', compact('tipo'));
    }

    public function resultados(Request $request)
    {
        $tipo = $request->input('tipo');
        $valor = $request->input('valor');
        $tempo = $request->input('tempo');

        $retorno = $this->calcularRetorno($tipo, $valor, $tempo);

        return view('investimentos.resultados', compact('tipo', 'valor', 'tempo', 'retorno'));
    }

    private function calcularRetorno($tipo, $valor, $tempo)
    {
        switch ($tipo) {
            case 'Renda Fixa':
                return $valor * pow(1.05, $tempo);
            case 'Ações':
                return $valor * pow(1.10, $tempo);
            case 'Fundos Imobiliários':
                return $valor * pow(1.08, $tempo);
            default:
                return $valor;
        }
    }
}
