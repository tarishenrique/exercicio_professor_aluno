CREATE DATABASE escola

CREATE TABLE livro
(
isbn VARCHAR(20) PRIMARY KEY,
titulo VARCHAR(50),
autor VARCHAR(100)
)

CREATE TABLE professor
(
cpf VARCHAR(20) PRIMARY KEY,
nome VARCHAR(30),
disciplina VARCHAR(30)
)