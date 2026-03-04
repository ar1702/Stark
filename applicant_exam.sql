CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    middle_name VARCHAR(100),
    birth_date DATE NOT NULL,
    age INT NOT NULL,
    address VARCHAR(100) NOT NULL,
    basic_salary DECIMAL(10,2) NOT NULL,
    annual_salary DECIMAL(12,2) NOT NULL
);

