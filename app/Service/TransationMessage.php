<?php

namespace App\Service;

use Illuminate\Http\Request;


class TransationMessage
{
    public function returnDestroyProductMessage(Request $request, $productName)
    {
        $request->session()
            ->flash(
                'message',
                "Produto {$productName} Removido do Banco de Dados"
            );
    }

    public function returnAddProductMessage(Request $request, array $product)
    {
        $request->session()
            ->flash(
                'message',
                "Produto {$product['product_name']} Inserido no Banco de Dados"
            );
    }

    public function userPromotionMessage(Request $request, $userName)
    {
        $request->session()
            ->flash(
                'message',
                "{$userName} Se tornou Administrador"
            );
    }

    public function userDemotedMessage(Request $request, $userName)
    {
        $request->session()
            ->flash(
                'message',
                "Usuário {$userName} Se tornou User Comum"
            );
    }
}
