<?php

namespace App\Repository\Eloquent;

use App\Repository\Eloquent\EloquentRepository;
use App\Models\User;
/**
 * Description of UserRepository
 */
class UserRepository extends EloquentRepository {


    public function getModelName(): string {
        return User::class;
    }

}
