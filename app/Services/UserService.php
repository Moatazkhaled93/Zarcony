<?php

namespace App\Services;

use App\Repository\Eloquent\UserRepository;



class UserService {

    private $userRepository;


    public function __construct(UserRepository $userRepository) {

        $this->userRepository = $userRepository;

    }

    public function getAll(){

        return $this->userRepository->all();
    }

}
