<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseService extends Controller
{
     /**
     * @name expenseRepository
     * @access private 
     * @var expenseRepository
     */
    private $expenseRepository;

    /**
     * ExpenseService Contructor
     * @param ExpenseRepository $expenseRepository
     */
    public function __construct(ExpenseRepository $expenseRepository)
    {
        $this->expenseRepository = $expenseRepository;
    }
}
