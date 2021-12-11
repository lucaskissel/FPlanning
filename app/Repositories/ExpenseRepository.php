<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use App\Entities\Expense;

/**
 * Class ExpenseRepository.
 *
 * @package namespace App\Repositories;
 */
class ExpenseRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Expense::class;
    }
}
