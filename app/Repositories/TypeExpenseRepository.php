<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use App\Entities\TypeExpense;

/**
 * Class TypeExpenseRepository.
 *
 * @package namespace App\Repositories;
 */
class TypeExpenseRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeExpense::class;
    }
}
