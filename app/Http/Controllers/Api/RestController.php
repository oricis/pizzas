<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class RestController extends Controller
{
    protected array $timestampsCols = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function returnFailedAction(
        string $message = 'La acción ha fallado',
        array $data = [],
        int $statusCode = 200
    ): \Illuminate\Http\JsonResponse
    {
        $output = [
            'data'    => $data,
            'message' => $message,
            'status'  => $statusCode,
            'success' => false,
        ];

        return response()->json($output);
    }

    public function returnSuccessAction(
        string $message = 'La acción se ha completado con éxito',
        array $data = [],
        int $statusCode = 200
    ): \Illuminate\Http\JsonResponse
    {
        $output = [
            'data'    => $data,
            'message' => $message,
            'status'  => $statusCode,
            'success' => true,
        ];

        return response()->json($output);
    }
}
