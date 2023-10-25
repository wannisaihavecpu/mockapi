<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $productData = $this->fetchDataFromJsonFile();

        return response()->json(['data' => $productData], 200);
    }

    private function fetchDataFromJsonFile()
    {
        $jsonContent = File::get(public_path('raw.json'));
        $jsonData = json_decode($jsonContent, true);

        return $jsonData;
    }
}