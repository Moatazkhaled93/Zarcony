<?php

namespace App\Services;

use App\Repository\Eloquent\BrandRepository;



class BrandService {

    private $brandRepository;


    public function __construct(BrandRepository $brandRepository) {

        $this->brandRepository = $brandRepository;

    }

    public function getAll(){

        return $this->brandRepository->all();
    }

    public function create($data){

        return $this->brandRepository->create($data);
    }

    public function show($id){

       return $this->brandRepository->find($id);

    }

    public function update($data, $id){

        return $this->brandRepository->update($data, $id);

     }

    public function delete($id){

        return $this->brandRepository->delete($id);
    }

}
