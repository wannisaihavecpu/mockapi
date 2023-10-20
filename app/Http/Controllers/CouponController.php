<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{

    public function collectCoupon(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);
        $code = $request->input('code');

        if ($code == "lenovo1") {
            return response()->json([
                "status" => "success",
                "code" => $code
            ], 200);
        } else {
            return response()->json([
                "status" => "not success",
                "code" => $code
            ], 400);

        }
    }

    public function myCouponAvaliable(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_id' => 'required|array',
            // Ensure 'product_id' is an array
        ]);


        $productIds = $request->input('product_id');


        $couponData = $this->fetchDataMyCouponAvaliable($productIds);

        return response()->json([
            'data' => [
                'total' => count($couponData),
                'items' => $couponData,
            ],
        ]);
    }

    private function fetchDataMyCouponAvaliable(array $productIds)
    {
        // Initialize an empty array to store coupon data
        $couponData = [];

        foreach ($productIds as $productId) {
            // Replace this logic with your actual data retrieval process
            // You might query your database or fetch data from another source
            // Here, we return sample data for illustration purposes
            $coupon = [
                'id' => $productId,
                // Replace with the actual coupon ID
                'title' => 'คูปองลด Nuphy',
                'description' => 'ช้อปครบ 3,000.-',
                'useStatus' => true,
                'endDate' => '2023-12-30T17:00:00.000Z',
                'highlight' => [
                    'highlight1' => 'ลดเพิ่่ม',
                    'highlight2' => '1000.-',
                ],
            ];

            // Add the coupon data to the array
            $couponData[] = $coupon;
        }

        return $couponData;
    }


}