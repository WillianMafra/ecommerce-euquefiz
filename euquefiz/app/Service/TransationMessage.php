<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Http\Request;


class TransationMessage
{
    public function returnDestroyProductMessage(Request $request, Product $product)
    {
        $request->session()
            ->flash(
                'message',
                "Produto {$product['product_name']} Removido do Banco de Dados"
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
}
