CREATE Table USUARIO (
    ID_USUARIO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME_USUARIO VARCHAR (50) NOT NULL,
    DATA_NASCIMENTO DATETIME NOT NULL,
    NOME_MATERNO VARCHAR (50) NOT NULL,
    CPF INT (11) NOT NULL,
    TELEFONE_CELULAR INT (11) NOT NULL,
    TELEFONE_FIXO INT (11),
    LOGRADOURO VARCHAR (50) NOT NULL,
    NUMERO_RESIDENCIA INT (10) NOT NULL,
    COMPLEMENTO VARCHAR (50) NOT NULL,
    CEP INT (8) NOT NULL,
    LOGIN_USUARIO VARCHAR (16) NOT NULL,
    SENHA_USUARIO INT (8) NOT NULL
);
CREATE Table REGISTRO_USUARIO (
    ID_LOG INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    HORA_ACESSO DATETIME NOT NULL,
    METODO_ACESSO VARCHAR (50) NOT NULL,
    STA_ACESSO VARCHAR (50) NOT NULL,
    ID_USUARIO INT,
    FOREIGN KEY (ID_USUARIO)
REFERENCES usuario (ID_USUARIO)
ON DELETE CASCADE
);

drop TABLE USUARIO;
