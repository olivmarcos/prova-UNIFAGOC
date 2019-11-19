CREATE TABLE TBL_ALUNO (
    aln_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aln_nome VARCHAR(150) NOT NULL,
    aln_sexo VARCHAR(10),
    aln_dataNascimento DATE,
    aln_cpf VARCHAR(11) UNIQUE
);

INSERT INTO TBL_ALUNO (aln_nome, aln_sexo, aln_dataNascimento, aln_cpf)
VALUES 	('Noah Manuel Tiago Rezende', 'Masculino', '1998-06-03', '030.697.049-05'),
    	('Leandro Calebe Anderson da Cruz', 'Masculino', '1995-08-05', '522.800.686-99'),
    	('Yuri Vinicius Nogueira', 'Indefinido', '1992-05-11', '272.843.552-98'),
    	('Elza Luiza Cavalcanti', 'Feminino', '1997-02-02', '862.705.348-01'),
    	('Luna Esther Silveira', 'Feminino', '1988-12-14', '405.473.427-80');

CREATE TABLE TBL_ATIVIDADE_EXTENSAO (
    ate_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ate_titulo VARCHAR(200) UNIQUE,
    ate_tipo VARCHAR(7),    
    ate_responsavel VARCHAR(150),
    ate_limite_inscricao INT(3),
    ate_local VARCHAR(150),
    ate_data DATE,
    ate_hora TIME,
    ate_gratuito BOOLEAN,
    ate_valor DECIMAL(5,2)
);

INSERT INTO TBL_ATIVIDADE_EXTENSAO (ate_titulo, ate_tipo, ate_responsavel, ate_limite_inscricao, ate_local, ate_data, ate_hora, ate_gratuito, ate_valor)
VALUES ('GAME PARTY', 'Projeto', 'Marcos Oliveira', 500, 'Unifagoc', '2019-12-12', '20:00', 1, 0),
    ('Semana Acadêmica Computação', 'Projeto', 'Carlos Barreto', 250, 'Unifagoc', '2019-12-20', '19:00', 1, 0),
    ('Desenvolvimento Android', 'Curso', 'Sérgio Murillo', 100, 'Unifagoc', '2020-02-12', '08:00', 0, 100.00),
    ('Manutenção de ComputadoresY', 'Curso', 'Joás Wesley', 50, 'Unifagoc', '2020-03-12', '10:00', 1, 0);