CREATE DATABASE livraria;
USE livraria;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    ano INT,
    editora VARCHAR(150)
);

INSERT INTO livros (titulo, autor, editora, ano)
VALUES
('Dom Casmurro', 'Machado de Assis', 1899, 'Garnier'),
('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 1943, 'Reynal & Hitchcock'),
('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 1997, 'Bloomsbury');

SELECT * FROM livros;

SELECT * FROM livros WHERE id = 1;

UPDATE livros
SET titulo = 'Dom Casmurro - Edição Atualizada'
WHERE id = 1;

DELETE FROM livros WHERE id = 3;
