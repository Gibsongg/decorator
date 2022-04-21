<?php

namespace App\Services;

use DomainException;
use Illuminate\Support\Facades\Log;

class UserServiceLogDecorator extends AbstractUserServiceDecorator
{
    public function auth(string $login): bool
    {
        try {
            $this->service->auth($login);
            Log::info('Успешный вход');
        } catch (DomainException $exception) {
            //TODO: логирование
            Log::alert('Запрос не верный');
            throw $exception;
        }

        return true;
    }
}
