<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TypePaymentService;
use App\Http\Requests\Api\CreateTypePaymentRequest;
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
     * @Post("typeExpense")
     * 
     * Create a new type expense
     * 
     * @param CreateTypeExpenseRequest $request
     * @return mixed
     */
    public function create(CreateTypePaymentRequest $request)
    {
        $datas = $request->all();
        return new TypePaymentResource($this->typePaymentService->create($datas));
    }
}
