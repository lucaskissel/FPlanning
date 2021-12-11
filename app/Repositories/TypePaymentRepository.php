<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use App\Entities\TypePayment;

/**
 * Class TypeExpenseRepository.
 *
 * @package namespace App\Repositories;
 */
class TypePaymentRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypePayment::class;
    }
}
