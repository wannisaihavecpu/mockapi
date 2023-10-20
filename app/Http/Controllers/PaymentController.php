<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function productList(Request $request)
    {


        $compareData = [];


        $productData = $this->fetchDataProductList();

        $compareData = array_merge($compareData, $productData);

        return response()->json(['data' => $compareData], 200);
    }


    private function fetchDataProductList()
    {

        $productData = [
            [
                'shipping_id' => '12',
                'shipping_name_th' => 'DHL',
                'shipping_name_gb' => 'DHL',
                'shipping_rate' => 50,
                "title" => 'DHL +฿50.00'
            ],
            [
                'shipping_id' => '16',
                'shipping_name_th' => 'รับเองที่สาขา',
                'shipping_name_gb' => 'Get it yourself at the branch.',
                'shipping_rate' => 0,
                'shipping_name_th' => 'รับเองที่สาขา',
                "title" => 'รับเองที่สาขา'
            ]

        ];

        return $productData;

    }

}
