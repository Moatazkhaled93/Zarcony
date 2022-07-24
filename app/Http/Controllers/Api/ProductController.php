<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Helpers\HttpStatusCodes;
use App\Http\Requests\Product\ProductRequest;

class ProductController extends Controller
{

    public function index(ProductService $productService){
        try {
            $products = $productService->getAll();
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($products, 'get Products list successfully');
    }


    public function store(ProductRequest $request, ProductService $productService){
        try {
            $product = $productService->create($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($product, 'Product Created successfully');
    }

    public function show(ProductService $productService, $id){
        try {
            $product = $productService->show($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($product, 'Get Product  successfully');
    }

    public function update(ProductRequest $request, ProductService $productService, $id)
    {
        try {
            $product = $productService->update($request->validated(),$id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($product, 'update Product  successfully');
    }


    public function destroy(ProductService $productService, $id)
    {
        try {
             $productService->delete($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success('', 'delete Product  successfully');
    }
}
