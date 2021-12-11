<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense.
 *
 * @package namespace App\Entities;
 */
class TypeExpense extends Model
{
    protected $table = 'TYPEEXPENSE';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'NAME',
        'DESCRIPTION',
        'INSTALLMENTS',
    ];

    public $timestamps = false;
}
