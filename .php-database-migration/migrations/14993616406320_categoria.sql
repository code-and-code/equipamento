-- // categoria
-- Migration SQL that makes the change goes here.

CREATE TABLE categorias (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table categorias;
-- @UNDO
-- SQL to undo the change goes here.
