-- ===== Nome do banco 'week' ucs2_general_ci; =======

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE `postagem` (
  id INTEGER AUTO_INCREMENT PRIMARY KEY,  
  titulo varchar(200) NOT NULL,
  conteudo text  NOT NULL
);

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` INTEGER AUTO_INCREMENT PRIMARY KEY,  
  `nome` VARCHAR(50) NOT NULL,
  `mensagem` TEXT NOT NULL,
  `idPostagem` INTEGER,

  FOREIGN KEY (idPostagem) REFERENCES postagem(id) 
);


-- postagem
-- id int(11) primary key
-- titulo varchar(200),
-- conteudo text

-- comentario
-- id int(11) PRIMARY KEY
-- nome varchar (200)
-- mensagem text,
-- id_postagem int(11)

