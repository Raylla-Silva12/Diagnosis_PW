CREATE DATABASE db_imobiliaria;
USE db_imobiliaria;

CREATE TABLE tb_locacao (
    cd_locacao INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nm_cliente VARCHAR(45),
    ds_email VARCHAR(35),
    cd_ddd INT(2),
    nr_telefone INT(9),
    cd_senha VARCHAR(12),
    ds_compra ,
    ds_imovel ,
    ds_tipo_contato 
);


