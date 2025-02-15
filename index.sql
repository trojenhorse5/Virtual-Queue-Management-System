CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    contact VARCHAR(255) NOT NULL,
    patient_type ENUM('New', 'Returning', 'Emergency') NOT NULL,
    token_number INT AUTO_INCREMENT UNIQUE
);