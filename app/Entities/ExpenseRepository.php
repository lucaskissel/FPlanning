<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense.
 *
 * @package namespace App\Entities;
 */
class Expense extends Model
{
    protected $table = 'EXPENSE';

    protected $fillable = [
        'ID',
        'DUEDATE',
        'PAYDAY',
        'PAIDOUT',
        'NUMBERINSTALLMENTS',
        'VALUE',
        'IDTYPEEXPENSE',
        'IDTYPEPAYMENT',
    ];

    public $timestamps = false;
}
