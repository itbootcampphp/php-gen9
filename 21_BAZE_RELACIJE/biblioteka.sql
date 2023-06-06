CREATE DATABASE `biblioteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
​
CREATE TABLE `clanovi`(
    `id` INT AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL,
    `adresa` VARCHAR(80),
    `telefon` VARCHAR(15) NOT NULL -- bolje telefon da bude varchar nego int
) ENGINE=INNODB;
​
CREATE TABLE `knjige`(
    `id` INT AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `naziv` VARCHAR(50) NOT NULL
) ENGINE=INNODB;
​
CREATE TABLE `zanr`(
    `id` INT AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `naziv` VARCHAR(50) NOT NULL
) ENGINE=INNODB;
​
CREATE TABLE `zaduzenje`(
    `id` INT AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `datum` DATE NOT NULL, 
    `vratio` BOOLEAN DEFAULT 0 NOT NULL
) ENGINE=INNODB;
​
CREATE TABLE `pisac`(
    `id` INT AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL,
    `bio` TEXT,
    `god_rodj` INT(4) UNSIGNED -- bolje ovako nego YEAR, jer YEAR ne podrzava godine ispod 1901.
) ENGINE=INNODB;
​
CREATE TABLE `knjige_has_zanr`(
    `knjiga_id` INT NOT NULL,
    `zanr_id` INT NOT NULL
) ENGINE=INNODB;
​
ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `knjiga_zanr_knjiga_fk`
FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE, -- kada brisem knjigu, dozvoli mi da obrisem info o zanru.
ADD CONSTRAINT `knjiga_zanr_zanr_fk`
FOREIGN KEY (`zanr_id`)
REFERENCES `zanr`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE; -- ako se npr obrise zanr "akcija", ne zelim da izgubim informacije o knjigama!
-- no action brani brisanje sve dok postoji strani kljuc na taj podatak upisan u bazi.
-- ova dva upita (create i alter table) mogu izjedna da se napisu
​
ALTER TABLE `zaduzenje`
ADD `knjiga_id` INT NOT NULL,
ADD `clan_id` INT NOT NULL,
ADD CONSTRAINT `zaduzenje_clan_fk`
FOREIGN KEY (`clan_id`)
REFERENCES `clanovi`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE, -- moze i:
-- ON DELETE CASCADE ON UPDATE CASCADE
​
ADD CONSTRAINT `zaduzenje_knjiga_fk`
FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE; -- ne treba dozvoliti brisanje knjige koja je iznajmljena!
​
CREATE TABLE `knjige_has_pisac`(
    `knjiga_id` INT NOT NULL,
    `pisac_id` INT NOT NULL
) ENGINE=INNODB;
​
ALTER TABLE `knjige_has_pisac`
ADD CONSTRAINT `knjige_pisci_knjiga_fk`
FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `knjige_pisci_pisac_fk`
FOREIGN KEY (`pisac_id`)
REFERENCES `pisac`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;
​
INSERT INTO `knjige` VALUES
(null, "Beli ocnjak"),
(null, "Kafic na kraju sveta"),
(null, "Sta je dogadjaj"),
(null, "Povratak u kafic na kraju sveta"),
(null, "Atomske navike");
​
INSERT INTO `pisac` VALUES
(null, "Dzon", "Strelecki", null, 1967),
(null, "Slavoj", "Zizek", null, 1958),
(null, "Dzek", "London", null, 1901),
(null, "Dzejms", "Klir", null, 1978),
(null, "Autor", "Neki", "Autor Neki rodjen je 1993. godine u Americi bblablalbalbla..", 1993);
​
INSERT INTO `knjige_has_pisac` VALUES
(1, 13),
(2, 11),
(3, 12),
(4, 11),
(5, 14),
(5, 15);
​
INSERT INTO `clanovi` VALUES
(null, "Mihajlo", "Jovanovic", null, "064252525"),
(null, "Petra", "Aksentijevic", null, "00381629399403"),
(null, "Jovana", "Jovic", "Vaseljenska 33", "0641234566");
​
INSERT INTO `zaduzenje` VALUES
(null, "2023-05-05", 1, 1, 7),
(null, "2023-05-09", 0, 5, 7),
(null, "2023-06-01", 0, 1, 9);
​
​