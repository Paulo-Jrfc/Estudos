DELIMITER //
CREATE PROCEDURE sp_procura_produto(in codProduto_param INT)
BEGIN
    SELECT * FROM tbl_produtos WHERE codProduto = codProduto_param;
END;
//
DELIMITER ;