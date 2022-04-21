<?php

namespace App\Services;

class UserService implements UserServiceInterface
{
    public function auth(string $login): bool
    {
        if (empty($login)) {
            throw new \DomainException();
        }

        return true;
    }

    public function logout(): bool
    {
        throw new \RuntimeException();
    }
}
