CREATE TABLE IF NOT EXISTS Pessoa (
    nome VARCHAR(40) NOT NULL,
    cpf VARCHAR (11) PRIMARY KEY NOT NULL,
    email VARCHAR(20),
    telefone VARCHAR (20) NOT NULL
);
CREATE TABLE IF NOT EXISTS Sala (
    id_sala INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    bloco VARCHAR(10) NOT NULL,
    tipo VARCHAR(30) NOT NULL,
    situacao BOOLEAN NOT NULL,
    capacidade INTEGER
    );
CREATE TABLE IF NOT EXISTS Equipamento (
    id_equipamento INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(40) NOT NULL,
    disponibilidade BOOLEAN NOT NULL
    );
CREATE TABLE IF NOT EXISTS Reserva (
    id_reserva INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    cpf_pessoa VARCHAR(11),
    data_agendada TIMESTAMP NOT NULL,
    id_sala INTEGER,
    data_reserva TIMESTAMP NOT NULL,
    horario_entrada TIME NOT NULL,
    horario_saida TIME NOT NULL,
    obs VARCHAR(130),
    id_equipamento INTEGER,
    CONSTRAINT fk_pessoa FOREIGN KEY (cpf_pessoa) REFERENCES Pessoa(cpf),
    CONSTRAINT fK_sala FOREIGN KEY (id_sala) REFERENCES Sala(id_sala),
    CONSTRAINT fK_equipamento FOREIGN KEY (id_equipamento) REFERENCES Equipamento(id_equipamento)
    );