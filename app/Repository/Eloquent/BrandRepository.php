<?php

namespace App\Repository\Eloquent;

use App\Repository\Eloquent\EloquentRepository;
use App\Models\Brand;
/**
 * Description of UserRepository
 */
class BrandRepository extends EloquentRepository {


    public function getModelName(): string {
        return Brand::class;
    }

}
