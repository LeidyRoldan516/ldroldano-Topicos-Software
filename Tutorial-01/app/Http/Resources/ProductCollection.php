<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'status' => 'success',
            'data' => $this->collection,
            'additionalData' => [
                'storeName' => 'Mega Store',
                'storeProductsLink' => route('product.index'),
            ],
        ];
    }
}
