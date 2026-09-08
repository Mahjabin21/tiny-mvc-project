CREATE DATABASE IF NOT EXISTS tiny_expense;
USE tiny_expense;

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    amount DECIMAL(10,2) NOT NULL
);

INSERT INTO expenses (title, amount) VALUES
('Lunch', 150.00),
('Transport', 80.00);
