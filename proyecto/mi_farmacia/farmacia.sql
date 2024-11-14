-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS farmacia;

-- Usar la base de datos
USE farmacia;

-- Crear la tabla productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    formula VARCHAR(255) NOT NULL,
    caducidad DATE NOT NULL,
    precio DECIMAL(10, 2) NOT NULL
);

-- Insertar algunos datos de ejemplo
INSERT INTO productos (nombre_producto, formula, caducidad, precio) VALUES
('Ibuprofeno', 'Ibuprofeno 400mg', '2025-12-31', 49.99),
('Paracetamol', 'Paracetamol 500mg', '2024-06-30', 29.50),
('Amoxicilina', 'Amoxicilina 500mg', '2025-09-15', 79.00),
('Omeprazol', 'Omeprazol 20mg', '2026-03-12', 99.99);
