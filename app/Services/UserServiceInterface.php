<?php

namespace App\Services;

interface UserServiceInterface
{
    public function auth(string $login): bool;

    public function logout(): bool;
}
