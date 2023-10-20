<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function index(Request $request)
    {
        // Check if the required parameters are present in the request
        if (!$request->has('product_ids')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Missing required parameters'
            ]);
        }

        // Get the product_ids parameter from the request
        $productIds = $request->input('product_ids');

        // Split the comma-separated values into an array
        $productIdsArray = explode(',', $productIds);

        // Initialize an empty array to store the data for each product ID
        $compareData = [];

        // Loop through each product ID and fetch the data
        foreach ($productIdsArray as $productId) {
            // Assuming you have a function to fetch data for a product by its ID, replace this with your actual logic
            $productData = $this->fetchDataForProductId($productId);

            // Add the product data to the comparison data array
            $compareData[] = $productData;
        }

        return response()->json(['data' => $compareData], 200);
    }

    // Replace this function with your actual logic to fetch data for a product by its ID
    private function fetchDataForProductId($productId)
    {
        // Sample data for demonstration, replace with your actual data retrieval logic
        return [
            'product_id' => $productId,
            'name_th' => $productId,
            'brand' => 'AMD',
            'price_sale' => 1250.00,
            'price_before' => 1999.00,
            'discount' => '-25%',
            'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            'product_detail' => [
                'filters' => [
                    [
                        'filter_id' => '496',
                        'name_th' => 'Warranty',
                        'subfilter_names' => '3 Years'
                    ],
                    [
                        'filter_id' => '507',
                        'name_th' => 'Processor',
                        'subfilter_names' => 'AMD AM'
                    ],
                    [
                        'filter_id' => '509',
                        'name_th' => 'TEST',
                        'subfilter_names' => 'TEST'
                    ],
                    [
                        'filter_id' => '509',
                        'name_th' => 'TEST',
                        'subfilter_names' => 'TEST'
                    ],
                    [
                        'filter_id' => '509',
                        'name_th' => 'TEST',
                        'subfilter_names' => 'TEST'
                    ],
                    [
                        'filter_id' => '509',
                        'name_th' => 'TEST',
                        'subfilter_names' => 'TEST'
                    ],
                ]
            ]
        ];
    }

    public function productList(Request $request)
    {
        // Check if the required parameters are present in the request
        if (!$request->has('category_id')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Missing required parameters'
            ]);
        }

        // Get the product_ids parameter from the request
        $categoryIds = $request->input('category_id');


        $compareData = [];


        $productData = $this->fetchDataProductList($categoryIds);

        $compareData = array_merge($compareData, $productData);

        return response()->json(['data' => $compareData], 200);
    }

    private function fetchDataProductList($categoryID)
    {

        $productData = [
            [
                'category_id' => $categoryID,
                'product_id' => 'SKU-67171',
                'name_th' => 'MSI GF63 THIN 11UCX-1627TH 67171',
                'brand' => 'AMD',
                'price_sale' => 12345,
                'price_before' => 12345.00,
                'discount' => '-25%',
                'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            ],
            [
                'category_id' => $categoryID,
                'product_id' => 'SKU-06253',
                'name_th' => 'Product 06253',
                'brand' => 'AMD',
                'price_sale' => 1250.00,
                'price_before' => 1999.00,
                'discount' => '-25%',
                'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            ],
            [
                'category_id' => $categoryID,
                'product_id' => 'SKU-67138',
                'name_th' => 'Praduct SKU-67138',
                'brand' => 'AMD',
                'price_sale' => 1250.00,
                'price_before' => 1999.00,
                'discount' => '-25%',
                'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            ],
            [
                'category_id' => $categoryID,
                'product_id' => 'SKU-67139',
                'name_th' => 'Prb 67139',
                'brand' => 'AMD',
                'price_sale' => 1250.00,
                'price_before' => 1999.00,
                'discount' => '-25%',
                'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            ],
            [
                'category_id' => $categoryID,
                'product_id' => 'SKU-67140',
                'name_th' => 'Prb 67140',
                'brand' => 'AMD',
                'price_sale' => 1250.00,
                'price_before' => 1999.00,
                'discount' => '-25%',
                'image' => '/assets/images/products/CPU/AMD/product733_800.jpg',
            ]
        ];

        return $productData;

    }

}
