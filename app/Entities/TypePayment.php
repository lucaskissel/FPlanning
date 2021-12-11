<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense.
 *
 * @package namespace App\Entities;
 */
class TypePayment extends Model
{
    protected $table = 'TYPEPAYMENT';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'NAME',
        'DESCRIPTION',
    ];

    public $timestamps = false;
}
