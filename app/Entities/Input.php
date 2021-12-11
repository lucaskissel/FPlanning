<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expense.
 *
 * @package namespace App\Entities;
 */
class Input extends Model
{
    protected $table = 'INPUT';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'SOURCE',
        'DESCRIPTION',
        'VALUE',
        'INPUTDATE',
    ];

    public $timestamps = false;
}
