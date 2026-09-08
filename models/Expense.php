<?php
class Expense {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "tiny_expense");
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM expenses");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>