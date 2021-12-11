<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

use App\Services\TypeExpenseService;
use App\Http\Requests\Api\CreateTypeExpenseRequest;
use App\Http\Requests\Api\IdRequest;
use App\Http\Requests\Api\UpdateTypeExpenseRequest;
use App\Http\Resources\TypeExpenseResource;


class TypeExpenseController extends Controller
{
    /**
     * @name typeExpenseService
     * @access private 
     * @var typeExpenseService
     */
    private $typeExpenseService;

    /**
     * TypeExpenseController Constructor
     * @param TypeExpenseService $typeExpenseService
     */
    public function __construct(TypeExpenseService $typeExpenseService)
    {
        $this->typeExpenseService = $typeExpenseService;
    }

    /**
     * @Post("typeExpense")
     * 
     * Create a new type expense
     * 
     * @param CreateTypeExpenseRequest $request
     * @return mixed
     */
    public function create(CreateTypeExpenseRequest $request)
    {
        try {
            $datas = $request->all();
            return new TypeExpenseResource($this->typeExpenseService->create($datas));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        } 
    }

    /**
     * @Get("typeExpenses")
     * 
     * Get all types of Expenses
     * 
     * @return mixed
     */
    public function all()
    {
        try {
            return TypeExpenseResource::collection($this->typeExpenseService->all());
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Get("typeExpense")
     * 
     * Get all types of Expense by id
     * 
     * @param FindByIdRequest $request
     * @return mixed
     */
    public function findById(IdRequest $request)
    {
        try {
            $id = $request->input('id');
            return new TypeExpenseResource($this->typeExpenseService->findById($id));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Put("typeExpense")
     * 
     * Update typeExpense by id
     * 
     * @param UpdateTypeExpenseRequest $request
     * @return mixed
     */
    public function update(UpdateTypeExpenseRequest $request)
    {
        try {
            $datas = $request->all();
            return new TypeExpenseResource($this->typeExpenseService->update($datas));
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @Delete("typeExpense")
     * 
     * Delete typeExpense by id
     * 
     * @param IdRequest $request
     * @return mixed
     */
    public function deleteById(IdRequest $request)
    {
        try {
            $id = $request->input('id');
            $this->typeExpenseService->deleteById($id);
            return response()->json(null, 204);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}
