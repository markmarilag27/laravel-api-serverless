<?php

namespace App\Http\Controllers;

use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function responseWithAccessToken(string $accessToken, User $user, int $statusCode = Response::HTTP_OK): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'data' => [
                'access_token'  => $accessToken,
                'user'          => new UserResource($user)
            ]
        ], $statusCode)
            ->withHeaders([
                'Authorization' => 'Bearer ' . $accessToken
            ]);
    }
}
