<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\Ordem;
use Illuminate\Http\Request;

use Carbon\Carbon;


class AtivoController extends Controller
{

    public function index(Request $request)
    {

        $index = true;
        $compra = null;
        $vender = null;
        $pesquisar = null;

        return view('/home', ['index' => $index, 'compra' => $compra, 'vender' => $vender, 'pesquisar' => $pesquisar]);
    }

    public function validacao(Request $request)
    {

        $ativo = $request->input('Ativo');
        $compra = $request->input('Compra');
        $venda = $request->input('Venda');

        $value = null;

        if ($ativo == null) {

            return redirect()->back()->with('erro', "Ativo Não Inserido");
        }

        $bdAtivo = Ativo::where('codigo', $ativo)->get();



        foreach ($bdAtivo as $bd) {
            $value = $bd->codigo;
        }


        if ($value == null) {

            return redirect()->back()->with('erro', "Ativo $ativo Inexistente");
        } else {

            $index = false;

            if ($compra != null) {

                $compra = true;
                $vender = null;
                $pesquisar = null;

                return view('/home', ['ativo' => $bdAtivo, 'index' => $index, 'compra' => $compra, 'vender' => $vender, 'pesquisar' => $pesquisar]);
            } else if ($venda != null) {

                $compra = null;
                $vender = true;
                $pesquisar = null;

                return view('/home', ['ativo' => $bdAtivo, 'index' => $index, 'compra' => $compra, 'vender' => $vender, 'pesquisar' => $pesquisar]);
            } else {

                $valorCompra = 0;
                $valorVenda = 0;

                $arrayVazio = false;

                $bdOrdem = Ordem::where('codigo_ativo', $ativo)->get();

                if($bdOrdem->isEmpty()){
                    $arrayVazio = true;
                }

                foreach ($bdOrdem as $o) {
                    if ($o->tipo == 1) {
                        $valorCompra = $valorCompra + $o->valor;
                    }else{
                        $valorVenda = $valorVenda + $o->valor;
                    }
                }

                $saldo = $valorCompra - $valorVenda;

                $compra = null;
                $vender = null;
                $pesquisar = true;

                return view('/home', ['arrayVazio' => $arrayVazio, 'saldo' => $saldo, 'ordem' => $bdOrdem, 'ativo' => $bdAtivo, 'index' => $index, 'compra' => $compra, 'vender' => $vender, 'pesquisar' => $pesquisar]);
            }
        }
    }


    public function compra(Request $request, $ativo)
    {

        $data = Carbon::now();

        $qtd = $request->input('qtd');
        $valor = $request->input('valor');

        $query = array('tipo' => 1, 'quantidade' => $qtd, 'valor' => $valor, 'data' => $data, 'codigo_ativo' => $ativo);
        Ordem::insert($query);

        return redirect()->action(
            [AtivoController::class, 'index']
        );
    }

    public function venda(Request $request, $ativo)
    {

        $data = Carbon::now();

        $qtd = $request->input('qtd');
        $valor = $request->input('valor');

        $query = array('tipo' => 2, 'quantidade' => $qtd, 'valor' => $valor, 'data' => $data, 'codigo_ativo' => $ativo);
        Ordem::insert($query);

        return redirect()->action(
            [AtivoController::class, 'index']
        );
    }
}
