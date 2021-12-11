<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\InputService;
use App\Http\Requests\Api\CreateInputRequest;
use App\Http\Resources\InputResource;

class InputController extends Controller
{
    /**
     * @name inputService
     * @access private 
     * @var inputService
     */
    private $inputService;

    /**
     * InputController Constructor
     * @param InputService $inputService
     */
    public function __construct(InputService $inputService)
    {
        $this->inputService = $inputService;
    }

    /**
     * @Post("input")
     * 
     * Create a new Input
     * 
     * @param CreateInputRequest $request
     * @return mixed
     */
    public function create(CreateInputRequest $request)
    {
        $datas = $request->all();
        return new InputResource($this->inputService->create($datas));
    }
}
