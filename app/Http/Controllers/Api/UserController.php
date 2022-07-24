<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Helpers\HttpStatusCodes;

class UserController extends Controller
{

    public function index(UserService $userService)
    {
        try {
            $users = $userService->getAll();
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($users, 'get users list successfully');
    }

}
