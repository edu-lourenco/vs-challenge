<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\V1\CreateUserRequest;
use App\Http\Controllers\Controller;
use Model\User\UserRepositoryInterface;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(CreateUserRequest $request)
    {
        $user = $this->userRepository->create($request->all());
        return $this->successResponse($user);
    }
}