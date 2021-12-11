<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TypeExpenseService;
use App\Http\Requests\Api\CreateTypeExpenseRequest;
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
        $datas = $request->all();
        return new TypeExpenseResource($this->typeExpenseService->create($datas));
    }
}
