<?php

namespace App\Services;

use Illuminate\Http\Request;
use Exception;

use App\Repositories\InputRepository;

class InputService
{
     /**
     * @name inputRepository
     * @access private 
     * @var inputRepository
     */
    private $inputRepository;

    /**
     * InputService Contructor
     * @param InputRepository $inputRepository
     */
    public function __construct(InputRepository $inputRepository)
    {
        $this->inputRepository = $inputRepository;
    }

    /**
     * Create a new input
     * 
     * @param array $datas
     * @return mixed
     */
    public function create($datas)
    {
        $datas = [
            'SOURCE'      => $datas['source'],
            'DESCRIPTION' => $datas['description'],
            'VALUE'       => $datas['value'],
            'INPUTDATE'   => $datas['inputDate'],
        ];
        return $this->inputRepository->create($datas);
    }

    /**
     * Get all Inputs
     * 
     * @return mixed
     */
    public function all()
    {
        $datas = $this->inputRepository->all();
        if($datas->isEmpty()) {
            throw new Exception("No data found", 404);
        } else {
            return $datas;
        }
    }

    /**
     * Get input by id
     * 
     * @param int $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->inputRepository->find($id);
    }

    /**
     * Update input by id
     * 
     * @param array $datas
     * @return mixed
     */
    public function update($datas)
    {
        $datas = [
            'ID'          => $datas['id'],
            'SOURCE'      => $datas['source'],
            'DESCRIPTION' => $datas['description'],
            'VALUE'       => $datas['value'],
            'INPUTDATE'   => $datas['inputDate'],
        ];
        return $this->inputRepository->update($datas, $datas['ID'])->find($datas['ID']);
    }

    /**
     * Delete input by id
     * 
     * @param int $id
     * @return mixed
     */
    public function deleteById($id)
    {
        return $this->inputRepository->delete($id);        
    }
}
