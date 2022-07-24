<?php

namespace App\Services;

use App\Repository\Eloquent\ProductRepository;



class ProductService {

    private $productRepository;


    public function __construct(ProductRepository $productRepository) {

        $this->productRepository = $productRepository;

    }

    public function getAll(){

        return $this->productRepository->all();
    }

    public function create($data){

        return $this->productRepository->create($data);
    }

    public function show($id){

       return $this->productRepository->find($id);

    }

    public function update($data, $id){

        return $this->productRepository->update($data, $id);

     }

    public function delete($id){

        return $this->productRepository->delete($id);
    }

}
