<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

use App\Services\TypePaymentService;
use App\Http\Requests\Api\CreateTypePaymentRequest;
use App\Http\Requests\Api\UpdateTypePaymentRequest;
use App\Http\Requests\Api\IdRequest;
use App\Http\Resources\TypePaymentResource;

class TypePaymentController extends Controller
{
    /**
     * @name typePaymentService
     * @access private 
     * @var typePaymentService
     */
    private $typePaymentService;

    /**
     * TypePaymentController Constructor
     * @param TypePaymentService $typePaymentService
     */
    public function __construct(TypePaymentService $typePaymentService)
    {
        $this->typePaymentService = $typePaymentService;
    }

    /**
     * @Post("typePayment")
     * 
     * Create a new type payment
     * 
     * @param CreateTypeExpenseRequest $request
     * @return mixed
     */
    public function create(CreateTypePaymentRequest $request)
    {
        try {
            $datas = $request->all();
            return new TypePaymentResource($this->typePaymentService->create($datas));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        } 
    }

    /**
     * @Get("typePayments")
     * 
     * Get all types of Payment
     * 
     * @return mixed
     */
    public function all()
    {
        try {
            return TypePaymentResource::collection($this->typePaymentService->all());
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 400);
        }
    }

    /**
     * @Get("typePayment")
     * 
     * Get all types of Payment by id
     * 
     * @param FindByIdRequest $request
     * @return mixed
     */
    public function findById(IdRequest $request)
    {
        try {
            $id = $request->input('id');
            return new TypePaymentResource($this->typePaymentService->findById($id));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Put("typePayment")
     * 
     * Update typePayment by id
     * 
     * @param UpdateTypePaymentRequest $request
     * @return mixed
     */
    public function update(UpdateTypePaymentRequest $request)
    {
        try {
            $datas = $request->all();
            return new TypePaymentResource($this->typePaymentService->update($datas));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Delete("typePayment")
     * 
     * Delete typePayment by id
     * 
     * @param IdRequest $request
     * @return mixed
     */
    public function deleteById(IdRequest $request)
    {
        try {
            $id = $request->input('id');
            $this->typePaymentService->deleteById($id);
            return response()->json(null, 204);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

}

