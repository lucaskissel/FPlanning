<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\InputService;
use App\Http\Requests\Api\CreateInputRequest;
use App\Http\Requests\Api\IdRequest;
use App\Http\Requests\Api\UpdateInputRequest;
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

    /**
     * @Get("inputs")
     * 
     * Get all Inputs
     * 
     * @return mixed
     */
    public function all()
    {
        return InputResource::collection($this->inputService->all());
    }

    /**
     * @Get("input")
     * 
     * Get input by id
     * 
     * @param FindByIdRequest $request
     * @return mixed
     */
    public function findById(IdRequest $request)
    {
        $id = $request->input('id');
        return new InputResource($this->inputService->findById($id));
    }
    
    /**
     * @Put("input")
     * 
     * Update input by id
     * 
     * @param UpdateInputRequest $request
     * @return mixed
     */
    public function update(UpdateInputRequest $request)
    {
        $datas = $request->all();
        return new InputResource($this->inputService->update($datas));
    }

    /**
     * @Delete("input")
     * 
     * Delete input by id
     * 
     * @param IdRequest $request
     * @return mixed
     */
    public function deleteById(IdRequest $request)
    {
        $id = $request->input('id');
        return $this->inputService->deleteById($id);
    }
}

