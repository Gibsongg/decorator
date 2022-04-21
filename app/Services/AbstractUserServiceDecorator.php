<?php

namespace App\Services;

class AbstractUserServiceDecorator implements UserServiceInterface
{
    protected UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function auth(string $login): bool
    {
        $this->service->auth($login);

        return true;
    }

    public function logout(): bool
    {
        $this->service->logout();
    }
}
