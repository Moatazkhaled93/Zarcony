<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BrandService;
use App\Helpers\HttpStatusCodes;
use App\Http\Requests\Brand\BrandRequest;

class BrandController extends Controller
{

    public function index(BrandService $brandService){
        try {
            $brands = $brandService->getAll();
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($brands, 'get brands list successfully');
    }


    public function store(BrandRequest $request, BrandService $brandService){
        try {
            $brand = $brandService->create($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($brand, 'Brand Created successfully');
    }

    public function show(BrandService $brandService, $id){
        try {
            $brand = $brandService->show($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($brand, 'Get Brand  successfully');
    }

    public function update(BrandRequest $request, BrandService $brandService, $id)
    {
        try {
            $brand = $brandService->update($request->validated(),$id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($brand, 'update Brand  successfully');
    }


    public function destroy(BrandService $brandService, $id)
    {
        try {
             $brandService->delete($id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success('', 'delete Brand  successfully');
    }
}
