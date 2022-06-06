<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    public function createNewUser(UserDTO $userDTO): User
    {
        return User::create([
            'name' => $userDTO->name,
            'email' => $userDTO->email,
            'password' => Hash::make($userDTO->password)
        ]);
    }

    public function createUserAccessToken(User $user, ?string $userAgent, ?array $abilities = ['*']): string
    {
        $name = Str::snake(config('app.name').$userAgent);
        return $user->createToken($name, $abilities)->plainTextToken;
    }
}
