CREATE TABLE inscrito (
  id_usuario integer PRIMARY KEY AUTOINCREMENT,
  nome VARCHAR(100),
  email VARCHAR(150),
  data_nascimento DATE,
  genero CHAR(14),
  tipo_inscricao CHAR(1),
  mensagem VARCHAR(300)
);

DROP TABLE inscrito;