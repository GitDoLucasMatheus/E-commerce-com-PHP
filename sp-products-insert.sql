USE project_site;

CREATE PROCEDURE `sp_products_insert`(
pname VARCHAR(150),
pprice INT(11),
pdescription VARCHAR(200)
)
BEGIN

	INSERT INTO products(name, price, description) VALUES (pname, pprice, pdescription);
    SELECT * FROM products WHERE id = LAST_INSERT_ID();

END