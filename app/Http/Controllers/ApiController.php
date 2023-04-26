<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    protected $resourceName = '';

    public function respondJson(array $data, int $respondCode = 200, array $headers = [])
    {
        return response()->json($data, $respondCode, $headers);
    }
}
