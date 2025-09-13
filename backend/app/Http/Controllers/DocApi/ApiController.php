<?php

namespace App\Http\Controllers\DocApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="My API Documentation",
 *      description="Swagger OpenAPI docs"
 * )
 */
class ApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/hello",
     *     summary="Hello endpoint",
     *     @OA\Response(response=200, description="Success")
     * )
     */
    public function hello()
    {
        return response()->json(['message' => 'Hello world']);
    }
}