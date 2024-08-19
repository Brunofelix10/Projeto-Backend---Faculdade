create database db_projeto;
create table tb_usuario(
nome varchar(80)not null comment "Nome do cliente",
data_nascimento date not null comment "Data de nascimento do cliente",
genero varchar(30) not null comment "Sexo do cliente",
nome_materno varchar(80) not null comment "Nome da mãe do cliente",
cpf varchar(50)primary key not null comment "CPF do cliente",
email varchar(100)not null comment "Email do cliente",
telefoneCelular varchar(30)not null comment "Telefone celular do cliente",
telefoneFixo varchar(30)not null comment "Telefone fixo do cliente",
cep varchar(50) not null comment "Cep do cliente",
cidade varchar(30) not null comment "Cidade do clinete",
estado varchar(30) not null comment "Estado do cliente",
bairro varchar(50) not null comment "Bairro do cliente",
rua varchar(40) not null comment "Rua do cliente",
numeroCasa int(10) not null comment "Numero da casa do cliente",
login varchar(6) not null unique comment "Login do cliente",
senha varchar(8)not null unique comment "Senha do cliente");

create table tb_log(
nome varchar(80) not null,
cpf varchar(30)not null,
diaLogin date not null,
hora time,
fatorDeAutenticacao varchar(80));

INSERT INTO tb_usuario (nome, data_nascimento, genero, nome_materno, cpf, email, telefoneCelular, telefoneFixo, cep, cidade, estado, bairro, rua, numeroCasa, login, senha) 
VALUES ('Administrador', '2024-05-20', 'INDEF', 'S/N', 'S/CPF', 'S/E', 'S/TC', 'S/TF', 'S/CEP', 'S/C', 'S/E', 'S/B', 'S/R', '2', 'adm123', 'adm12345'); 

ALTER TABLE tb_usuario
ADD tipo_usuario ENUM('comum', 'master') NOT NULL DEFAULT 'comum' AFTER senha;

UPDATE tb_usuario
SET tipo_usuario = 'master'
WHERE login = 'adm123';