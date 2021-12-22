<?php

namespace App\Services;

use Illuminate\Http\Request;
use Exception;

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

    /**
     * Get all Types of Payment
     * 
     * @return mixed
     */
    public function all()
    {
        $datas = $this->typePaymentRepository->all();
        if($datas->isEmpty()) {
            throw new Exception("No data found", 404);
        } else {
            return $datas;
        }
    }

    /**
     * Get Payment by id
     * 
     * @param int $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->typePaymentRepository->find($id);
    }

    /**
     * Update type payment by id
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
        ];
        return $this->typePaymentRepository->update($datas, $datas['ID'])->find($datas['ID']);
    }

     /**
     * Delete type payment by id
     * 
     * @param int $id
     * @return mixed
     */
    public function deleteById($id)
    {
        $this->typePaymentRepository->delete($id);        
    }
}
