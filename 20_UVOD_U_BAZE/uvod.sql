-- Komanda za kreiranje baze podataka:
-- CREATE DATABASE test_druga;

CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- Komanda za brisanje baze podataka:
DROP DATABASE test_druga;

-- Komanda za odabir baze podataka:
USE test_baza;

-- Kreiraj bazu skola:
CREATE DATABASE skola CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- Odaberi bazu skola:
USE skola;

-- Kreiranje tabele studenti
CREATE TABLE studenti(
    ime VARCHAR(50),
    prezime VARCHAR(50)
);

-- Kreiranje tabele customers
CREATE TABLE customers(
    id INT NOT NULL,
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18, 2) DEFAULT 500
);

-- Kreiranje tabele tasks
CREATE TABLE tasks(
    task_id INT UNIQUE,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
);

-- Kreiranje tabele customers sa primarnim kljucem
--CREATE TABLE customers(
--    id INT NOT NULL,
--    name VARCHAR(20) NOT NULL,
--    age TINYINT NOT NULL,
--    address CHAR(25),
--    salary DECIMAL(18, 2) DEFAULT 500,
--    PRIMARY KEY(id)
--); -- ovo ne jer vec postoji tabela sa ovim nazivom


-- Dodavanje primarnog kljuca u tabelu customers
ALTER TABLE customers ADD PRIMARY KEY(id);

ALTER TABLE tasks ADD PRIMARY KEY(task_id);


--U tabeli CUSTOMERS dodati kolonu active tipa BOOLEAN.
ALTER TABLE customers ADD active BOOLEAN;
--U tabeli CUSTOMERS dodati kolonu state tipa VARCHAR(90).
ALTER TABLE customers ADD state  VARCHAR(90);
-- U tabeli CUSTOMERS dodati kolonu number_of_visits tipa TINYINT.
ALTER TABLE customers ADD number_of_visits TINYINT;
--U tabeli TASKS dodati kolonu priority TINYINT NOT NULL.
ALTER TABLE tasks ADD priority TINYINT NOT NULL;

-- Brisanje tabele
DROP TABLE studenti;

-- Dodavanje novih redova u tabelu
INSERT INTO customers
VALUES (1, "Ana", 25, "Bubanjskih heroja 48", 600, 1, "Srbija", 37);


INSERT INTO customers(name, id, age, active, state, number_of_visits)
VALUES
("Bojana", 2, 39, 0, "Srbija", 16),
("Dejan", 3, 31, 0, "Crna Gora", 3);

INSERT INTO customers
VALUES (4, "Ana", 25, "Bubanjskih heroja 48", 600, 1, "Srbija", 37);

INSERT INTO tasks
(task_id, title, start_date, due_date, status, description, priority)
VALUES
(1, "Čas iz ITBootcampa", "2023-06-02", "2023-06-02", 1, "Čas iz baza podataka", 1),
(2, "Šetnja", "2023-06-01", "2023-06-01", 1, "Lagana šetnja", 0),
(3, "Uradi domaći zadatak", "2023-06-03", NULL, 1, "Domaći zadatak is SQL-a", 1);