-- create a table
CREATE TABLE credentials (
  id INTEGER PRIMARY KEY,
  username TEXT NOT NULL,
  password TEXT NOT NULL
);
-- insert some values
INSERT INTO credentials VALUES (1, 'admin', 'password');
INSERT INTO credentials VALUES (2, 'ILoveCheese', 'CheeseLovin');
INSERT INTO credentials VALUES (3, 'Jeff123', 'teabar');
INSERT INTO credentials VALUES (4, 'Kate', 'KateIsCool');