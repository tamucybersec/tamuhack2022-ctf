-- create a table
CREATE TABLE credentials (
  id INTEGER PRIMARY KEY,
  username TEXT NOT NULL,
  password TEXT NOT NULL
);
-- insert some values
INSERT INTO credentials VALUES (1, 'admin', 'password');
INSERT INTO credentials VALUES (2, 'ILoveCheese', 'CheeseLovin');
INSERT INTO credentials VALUES (3, 'Jeff123', 'gigem{th15_15_a_n1c3_pa55w0rd}');
INSERT INTO credentials VALUES (4, 'Kate', 'KateIsCool');