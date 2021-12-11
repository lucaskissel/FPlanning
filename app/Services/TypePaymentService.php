<?php

namespace App\Services;

use Illuminate\Http\Request;

use App\Repositories\TypePaymentRepository;

class TypePaymentService
{
     /**
     * @name typePaymentRepository
     * @access private 
     * @var typePaymentRepository
     */
    private $typePaymentRepository;

    /**
     * TypePaymentService Contructor
     * @param TypePaymentRepository $typePaymentRepository
     */
    public function __construct(TypePaymentRepository $typePaymentRepository)
    {
        $this->typePaymentRepository = $typePaymentRepository;
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
        ];
        return $this->typePaymentRepository->create($datas);
    }
}
