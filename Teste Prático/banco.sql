-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS cadastro_usuarios;

-- Usar o banco de dados
USE cadastro_usuarios;

-- Criar a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Inserir alguns usuários de exemplo

INSERT INTO usuarios (nome, email, senha) VALUES
('João Silva', 'joao@example.com', '$2y$10$abcdefghijklmnopqrstuv'),
('Maria Santos', 'maria@example.com', '$2y$10$vwxyzabcdefghijklmnopq'),
('Carlos Oliveira', 'carlos@example.com', '$2y$10$rstuvwxyzabcdefghijklm');
('Abimael De Menezes Pedro', 'abimaeldevfull.stack@gmail.com', 'senhavld123');
-- Verificar se os dados foram inseridos corretamente
SELECT * FROM usuarios;
