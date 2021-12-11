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
}
