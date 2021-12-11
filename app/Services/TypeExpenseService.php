<?php

namespace App\Services;

use Illuminate\Http\Request;

use App\Repositories\TypeExpenseRepository;

class TypeExpenseService
{
     /**
     * @name typeExpenseRepository
     * @access private 
     * @var typeExpenseRepository
     */
    private $typeExpenseRepository;

    /**
     * TypeExpenseService Contructor
     * @param TypeExpenseRepository $typeExpenseRepository
     */
    public function __construct(TypeExpenseRepository $typeExpenseRepository)
    {
        $this->typeExpenseRepository = $typeExpenseRepository;
    }

    /**
     * Create a new type expense
     * 
     * @param object $datas
     * @return mixed
     */
    public function create($datas)
    {
        $datas = [
            'NAME'         => $datas['name'],
            'DESCRIPTION'  => $datas['description'],
            'INSTALLMENTS' => $datas['installments'],
        ];
        return $this->typeExpenseRepository->create($datas);
    }

    /**
     * Get all Types of Expense
     * 
     * @return mixed
     */
    public function all()
    {
        $datas = $this->typeExpenseRepository->all();
        if($datas->isEmpty()) {
            throw new Exception("No data found", 404);
        } else {
            return $datas;
        }
    }

    /**
     * Get typeExpense by id
     * 
     * @param int $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->typeExpenseRepository->find($id);
    }

    /**
     * Update type expense by id
     * 
     * @param array $datas
     * @return mixed
     */
    public function update($datas)
    {
        $datas = [
            'ID'           => $datas['id'],
            'NAME'         => $datas['name'],
            'DESCRIPTION'  => $datas['description'],
            'INSTALLMENTS' => $datas['installments'],
        ];
        return $this->typeExpenseRepository->update($datas, $datas['ID'])->find($datas['ID']);
    }

    /**
     * Delete type expense by id
     * 
     * @param int $id
     * @return mixed
     */
    public function deleteById($id)
    {
        $this->typeExpenseRepository->delete($id);        
    }


}
