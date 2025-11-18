<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class PagamentoController extends Controller
{

    public function contratarPlano()
    {
        return view('site.contratarplano');
    }

    public function selecionarMetodo(Request $request)
    {
        $plano = $request->input('plano');
        // Redirecionar para a página de pagamento com o plano selecionado
        return view('site.pagamento', compact('plano'));
    }

    // public function criarPagamento()
    // { {
    //         SDK::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

    //         $item = new Item();
    //         $item->title = 'Plano Pet';
    //         $item->quantity = 1;
    //         $item->unit_price = 49.90;

    //         $preference = new Preference();
    //         $preference->items = [$item];
    //         $preference->save();

    //         return view('site.pagamento', [
    //             'preferenceId' => $preference->id,
    //             'publicKey' => env('MERCADOPAGO_PUBLIC_KEY')
    //         ]);
    //     }
    // }
};
