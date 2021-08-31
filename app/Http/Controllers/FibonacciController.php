<?php

namespace App\Http\Controllers;


use App\Helpers\Fibonacci;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class FibonacciController extends Controller
{

    public function show(Fibonacci $fibonacci, $position): Response
    {
        try {
            $value = $fibonacci->getValue($position);
        } catch (\Exception $exception) {
            $value = null;
        }

        $statusCode = $value ? 200 : 400;

        return new Response(['value' => $value], $statusCode);
    }
}
