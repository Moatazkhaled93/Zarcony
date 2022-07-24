<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPreferenceRequest;
use App\Services\AdminPreferenceService;
use Illuminate\Http\JsonResponse;
use App\Helpers\HttpStatusCodes;
use Illuminate\Http\Request;

class AdminPreferenceController extends Controller {
    /**
     * insert AdminPreference instance .
     * @param AdminPreferenceService $adminPreferenceService
     * @return JsonResponse
     */

    /**
     * @OA\Post(
     * path="/api/adminPreference",
     * summary="create admin Preference",
     * description="Create a new admin Preference",
     * operationId="authRegister",
     * tags={"admin Preference"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user details",
     *    @OA\JsonContent(
     * @OA\Property(property="employee_id", type="string", example="employee_id"),
      @OA\Property(property="entity_id", type="string", example="entity_id"),
      @OA\Property(property="page_url", type="integer", example="page_url"),
      @OA\Property(property="table_head", type="string", example="table_head"),
     *    ),
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Unauthenticated",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Unauthenticated"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=403,
     *    description="Forbidden",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Forbidden"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=400,
     *    description="Bad Request",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Bad Request"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="Success response",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="success"),
     *      @OA\Property(property="message", type="string", example="create admin Preference successfully"),
     *      @OA\Property(property="data", type="string",example="xxxxxx")
     *        )
     *     )
     * )
     */
    public function create(AdminPreferenceRequest $request, AdminPreferenceService $adminPreferenceService) {
        try {
            $adminPreference = $adminPreferenceService->create($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($adminPreference, 'new admin Preference successfully');
    }

    /**
     * update AdminPreference instance .
     * @param AdminPreferenceService $adminPreferenceService
     * @return JsonResponse
     */

    /**
     * @OA\Put(
     * path="/api/adminPreference/{admin_preference_id}",
     * summary="get admin Preference successfully",
     * description="get admin Preference successfully",
     * operationId="authRegister",
     * tags={"admin Preference"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user details",
     *    @OA\JsonContent(
     *       required={"area_id"},
     *       @OA\Property(property="area_id", type="string", format="string", example="xxxxx"),
     *    ),
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Unauthenticated",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Unauthenticated"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=403,
     *    description="Forbidden",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Forbidden"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=400,
     *    description="Bad Request",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Bad Request"),
     *        ) 
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="Success response",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="success"),
     *      @OA\Property(property="message", type="string", example="Move kiosk successfully"),
     *      @OA\Property(property="data", type="string",example="xxxxxx")
     *        )
     *     )
     * )
     * 
     */
    public function update(AdminPreferenceRequest $request, AdminPreferenceService $adminPreferenceService, $admin_preference_id) {
        try {
            $adminPreference = $adminPreferenceService->update($request->validated(), $admin_preference_id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($adminPreference, 'get admin Preference successfully');
    }

    /**
     * get AdminPreference instance .
     * @param AdminPreferenceService $adminPreferenceService
     * @return JsonResponse
     */

    /**
     * @OA\Get(
     * path="/api/adminPreference/{entity_id}",
     * summary="get admin Preference successfully",
     * description="get admin Preference successfully",
     * operationId="kiosk",
     * tags={"admin Preference"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user details",
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Unauthenticated",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Unauthenticated"),
     *        )
     *      ),
     * @OA\Response(
     *    response=403,
     *    description="Forbidden",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Forbidden"),
     *        )
     *      ),
     * @OA\Response(
     *    response=400,
     *    description="Bad Request",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="error"),
     *      @OA\Property(property="message", type="string", example="Bad Request"),
     *        )
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="Success response",
     *    @OA\JsonContent(
     *      @OA\Property(property="status", type="string", example="success"),
     *      @OA\Property(property="message", type="string", example="get admin Preference successfully"),
     *      @OA\Property(property="data", type="string",example="xxxxxx")
     *        )
     *     )
     * )
     */
    public function get(Request $request, AdminPreferenceService $adminPreferenceService, $entity_id) {
        try {
            $adminPreference = $adminPreferenceService->get($request->all(), $entity_id);
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($adminPreference, 'get admin Preference successfully');
    }

}
