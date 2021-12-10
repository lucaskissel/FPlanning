<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ExpenseService;

class ExpenseController extends Controller
{
     /**
     * @name expenseService
     * @access private 
     * @var expenseService
     */
    private $expenseService;

    /**
     * ExpenseController Contructor
     * @param ExpenseService $expenseService
     */
    public function __construct(ExpenseService $expenseService)
    {
        $this->expenseService = $expenseService;
    }
}
