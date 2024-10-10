-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS cadastro_pessoas;
USE cadastro_pessoas;

-- Criar a tabela pessoas
CREATE TABLE IF NOT EXISTS pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    idade INT,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    renda DECIMAL(10, 2)
);

-- Inserir os registros
INSERT INTO pessoas (nome, sobrenome, idade, cpf, renda) VALUES
    ('João', 'Silva', 30, '12345678900', 5000.00),
    ('Maria', 'Santos', 25, '98765432100', 3500.00),
    ('Pedro', 'Oliveira', 40, '45678912300', 6000.00),
    ('Ana', 'Souza', 35, '32165498700', 4000.00),
    ('Carlos', 'Pereira', 28, '78912345600', 4500.00);

-- Selecionar todos os registros da tabela pessoas
SELECT * FROM pessoas;