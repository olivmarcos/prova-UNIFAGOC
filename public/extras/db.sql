CREATE TABLE TBL_ALUNO (
    aln_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aln_nome VARCHAR(150) NOT NULL,
    aln_sexo VARCHAR(10),
    aln_dataNascimento DATE,
    aln_cpf VARCHAR(11)
);

INSERT INTO TBL_ALUNO (aln_nome, aln_sexo, aln_dataNascimento, aln_cpf)
VALUES 	('Noah Manuel Tiago Rezende', 'Masculino', '1998-06-03', '030.697.049-05'),
    	('Leandro Calebe Anderson da Cruz', 'Masculino', '1995-08-05', '522.800.686-99'),
    	('Yuri Vinicius Nogueira', 'Indefinido', '1992-05-11', '272.843.552-98'),
    	('Elza Luiza Cavalcanti', 'Feminino', '1997-02-02', '862.705.348-01'),
    	('Luna Esther Silveira', 'Feminino', '1988-12-14', '405.473.427-80');
