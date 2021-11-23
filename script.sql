CREATE DATABASE db_imobiliaria;
USE db_imobiliaria;

CREATE TABLE tb_imobiliaria (
    cd_cliente INT NOT NULL PRIMARY KEY,
    nm_cliente VARCHAR(45),
    ds_email VARCHAR(35),
    cd_ddd INT(2),
    nr_telefone INT(9),
    cd_senha VARCHAR(12),
    ds_compra INT,
    ds_imovel INT,
    ds_tipo_contato INT
);
