
CREATE PROCEDURE myhome()
BEGIN
/* 0 all Category */
SELECT * FROM categories ORDER BY name asc;
/* 1 all SubCategory */
SELECT * FROM subcategories ORDER BY name asc;
SELECT p.id, p.title, p.price, p.discount, p.picture1,p.picture2, p.picture3, c.name cname, sc.name  scname, u.name uname
FROM products p, categories c, subcategories sc, units u
WHERE p.subcategory_id = sc.id AND sc.category_id = c.id AND p.unit_id = u.id
ORDER BY p.id DESC
LIMIT 5
;
END


//
CREATE PROCEDURE myhome()

BEGIN
/* 0. all category */
SELECT * FROM categories ORDER BY name ASC;
/* 1. all category */
SELECT * FROM subcategories ORDER BY name ASC;

SELECT p.id, p.title, p.discount, p.picture1, p.picture2, p.picture3, c.name cname, sc.name scname, u.name uname
FROM products p, categories c, subcategories sc, units u
WHERE p.subcategory_id = sc.id AND
sc.category_id = c.id AND
p.unit_id = u.id ORDER BY p.id DESC LIMIT 5;

END

CREATE PROCEDURE details( IN ids int )
BEGIN
/* 0. All Category */
SELECT * FROM categories ORDER by name asc;
/* 1. All SubCategory */
SELECT * FROM subcategories ORDER by name asc;
SELECT p.id, p.title, p.price, p.discount, p.picture1, p.picture2, p.picture3, c.name  cname, sc.name scname,
u.name uname
FROM products  p, categories c, subcategories sc, units u
where p.subcategory_id = sc.id and
sc.category_id = c.id AND
p.unit_id = u.id
and p.id = ids LIMIT 1;
END