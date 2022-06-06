<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Support\Carbon;

class UserDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $uuid,
        public readonly ?string $name,
        public readonly ?string $email,
        public readonly ?string $password,
        public readonly ?string $email_verification_code,
        public readonly ?Carbon $email_verified_at,
        public readonly ?Carbon $email_verification_sent_at,
        public readonly ?string $remember_token,
    )
    {}

    public static function fromValidatedRequest(array $data): UserDTO
    {
        return new UserDTO(
            null,
            null,
            $data['name'],
            $data['email'],
            $data['password'] ?? null,
            null,
            null,
            null,
            null,
        );
    }
}
