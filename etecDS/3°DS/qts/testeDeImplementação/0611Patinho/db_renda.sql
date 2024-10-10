CREATE DATABASE db_renda;
USE db_renda;

DROP TABLE IF EXISTS tbl_renda;
CREATE TABLE tbl_renda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    idade INT,
    cpf VARCHAR(14),
    renda_mensal DECIMAL(10,2)
);
SELECT * FROM tbl_renda;
INSERT INTO tbl_renda (nome, sobrenome, idade, cpf, renda_mensal)
VALUES
    ('João', 'Silva', 34, '123.456.789-10', 5000.00),
    ('Maria', 'Oliveira', 39, '987.654.321-21', 7500.00),
    ('Carlos', 'Santos', 42, '555.888.999-32', 6000.00),
    ('Ana', 'Lima', 29, '111.222.333-44', 4000.00),
    ('Pedro', 'Costa', 36, '999.000.111-55', 8200.00),
    ('Mariana', 'Pereira', 31, '777.444.555-66', 4800.00),
    ('Fernando', 'Rocha', 44, '333.666.999-77', 5500.00),
    ('Camila', 'Martins', 37, '444.777.888-88', 7000.00),
    ('Lucas', 'Oliveira', 26, '888.555.222-99', 6000.00),
    ('Patricia', 'Souza', 38, '222.333.444-00', 5300.00);
    
-- Selecionar todos os registros
SELECT * FROM tbl_renda;

ALTER TABLE tbl_renda convert to character set utf8mb4 collate utf8mb4_general_ci;

DROP DATABASE db_renda
