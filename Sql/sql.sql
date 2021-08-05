Create table ativo(
	codigo Varchar(250) PRIMARY KEY,
	preco DECIMAL(10,2) NOT NULL
);

Create table ordem(
	id int auto_increment PRIMARY KEY,
	tipo int NOT NULL,
	quantidade int NOT NULL,
	valor DECIMAL(10,2) NOT NULL,
	data Date NOT NULL,
	codigo_ativo Varchar(250),
	CONSTRAINT ck_tipo CHECK (tipo IN (1, 2)),
	FOREIGN KEY (codigo_ativo) REFERENCES ativo(codigo)
);

Insert Into ativo(codigo, preco)
Values('EMBR3', 19.21),
('ITUB4', 29.81),
('BBAS3', 31.82),
('VALE3', 114.62)


