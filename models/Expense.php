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
public function getTotal() {
    $result = $this->conn->query(
        "SELECT SUM(amount) AS total FROM expenses"
    );

    $row = $result->fetch_assoc();

    return $row['total'] ?? 0;
}
?>