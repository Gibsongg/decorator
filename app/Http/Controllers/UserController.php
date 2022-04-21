<?php

namespace App\Http\Controllers;

use App\Services\UserServiceInterface;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    private UserServiceInterface $service;

    public function __construct(UserServiceInterface $service)
    {
        $this->service = $service;
    }

    public function auth()
    {
        $this->service->auth('');
        return \response('ОК');
    }
}
