<?php
require_once "models/Expense.php";

class ExpenseController {
    public function index() {
        $expenseModel = new Expense();
        $expenses = $expenseModel->getAll();
        require "views/expense.php";
    }
}
$total = $expenseModel->getTotal();
?>