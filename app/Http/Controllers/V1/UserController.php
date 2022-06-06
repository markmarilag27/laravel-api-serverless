<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\DTO\UserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\UserStoreRequest;
use App\Http\Requests\V1\UserUpdateRequest;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $users = User::query()->latest('id');
        $result = $request->limit ? $users->cursorPaginate($request->limit) : $users->get();
        return UserResource::collection($result);
    }

    public function store(UserStoreRequest $request): \Illuminate\Http\JsonResponse
    {
        $userDTO = UserDTO::fromValidatedRequest($request->validated());
        $user = $this->userService->createNewUser($userDTO);
        $userAccessToken = $this->userService->createUserAccessToken($user, $request->userAgent());
        return $this->responseWithAccessToken($userAccessToken, $user, Response::HTTP_CREATED);
    }

    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request, User $user): UserResource
    {
        $userDTO = UserDTO::fromValidatedRequest($request->validated());
        $user->update([
            'name' => $userDTO->name,
            'email' => $userDTO->email
        ]);
        return new UserResource($user);
    }

    public function destroy(User $user): \Illuminate\Http\Response
    {
        $user->delete();
        return response()->noContent();
    }
}
