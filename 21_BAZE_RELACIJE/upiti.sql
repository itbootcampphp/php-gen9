-- pravimo novu bazu
CREATE DATABASE drustvena_mreza;

-- VEZA 1:1
-- pravimo tabelu korisnici
CREATE TABLE `korisnici` (
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45),
    `lozinka` VARCHAR(45)
);

-- pravimo tabelu profili
CREATE TABLE `profili` (
    `id` INT PRIMARY KEY,
    `adresa` VARCHAR (45),
    `telefon` VARCHAR (45),
    `korisnik_id` INT -- ovo smo zaboravili UNIQUE a obavezno je za 1:1 vezu!!!! pisemo ALTER TABLE ZA NAKNADNO DODAVANJE UNIQUE
);

-- dodajemo strani kljuc
ALTER TABLE `profili`
ADD FOREIGN KEY (`korisnik_id`) -- polje iz tabele rpofili
REFERENCES `korisnici`(`id`); -- polje iz tabele na koju stavljamo kljuc

-- STRANI KLJUC SE NIJE DODAO !!!! PROBLEM JE ENGINE=MYISAM

-- PROMENA ENGINE NA INNODB
ALTER TABLE `profili` ENGINE=INNODB;
ALTER TABLE `korisnici` ENGINE=INNODB;

-- NAKNADNO DODAVANJE UNIQUE
ALTER TABLE `profili` ADD UNIQUE( `korisnik_id`);  -- izmena izostalog dela

-- popunjavamo tabelu korisnici
INSERT INTO `korisnici` (`id`, `korisnicko_ime`, `lozinka`) 
VALUES
(1, 'pera_peric', '1234'),
(2, 'mika_mikic', '12345'),
(5, 'nikola_nikolic', '1212');

-- popunjavamo tabelu profili
INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`) VALUES
(1, 5, 'adresa korisnika id=5'),
(10, 2, 'adresa korisnika id=2');

-- OVO NIJE MOGUCE JER NEMAMO KORISNIKA SA ID=50
INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`) VALUES
(2, 50, 'adresa korisnika id=50');

-- OVO NIJE MOGUCE JER KORISNIK=5 VEC IMA PODATAK U TABELI PROFILI
INSERT INTO `profili` (`id`, `korisnik_id`, `adresa`) VALUES
(2, 5, 'adresa korisnika id=5');

-- IZMENA STRANOG KLJUCA - PRVO SE OBRISE PA SE DODA NOVI. 
-- ZA BRISANJE JE NEOPHODAN NAZIV
ALTER TABLE `profili` 
DROP FOREIGN KEY `profili_ibfk_1`; 
ALTER TABLE `profili` 
ADD CONSTRAINT `profili_ibfk_1` 
FOREIGN KEY (`korisnik_id`) 
REFERENCES `korisnici`(`id`) 
ON DELETE CASCADE ON UPDATE RESTRICT; 



-- VEZA 1:N
CREATE TABLE `objave`(
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `komentari` (
    `id` INT PRIMARY KEY,
    `komentar` VARCHAR(255) NOT NULL,
    `objava_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `komentari` 
ADD CONSTRAINT `komentari_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave` (`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO `objave` (`id`, `naslov_objave`) VALUES
(1, 'Moja prva objava'),
(2, 'Moja druga objava'),
(3, 'Moja treca objava');

-- Moja prva objava ima dva komentara, druga objava nema komentar i treca objava ima jedan komentar 
INSERT INTO `komentari` (`id`, `objava_id`, `komentar`) VALUES
(101, 1, 'Komentar 1 za objavu 1'),
(102, 1, 'Komentar 2 za objavu 1'),
(103, 3, 'Komentar 1 za objavu 3');

-- ovo nije moguce nemamo objavu sa id=100
INSERT INTO `komentari` (`id`, `objava_id`, `komentar`) VALUES
(104, 100, 'Komentar 1 za objavu 100');



-- VEZA N:M
CREATE TABLE `kategorije` (
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- OBRATI PAZNJU NA TIP
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'Ekonomija'),
(null, 'Crna hronika');

-- zbog AUTO_INCREMENT nismo u obavezi da navodimo id prilikom inserta sam dodaje
INSERT INTO `kategorije` (`naziv`) VALUES
('Ljubav'),
('Drustvo'),
('Zdravlje');

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT not null, -- FK NE MOZE DA SE DODA JER TIP POLJA MORA DA BUDE ISTI KAO kategorije(id)
    `objava_id` int not null
) ENGINE=INNODB;

ALTER TABLE `kategorije_has_objave` 
ADD CONSTRAINT `kat_obj_kategorija_fk`
FOREIGN KEY (`kategorija_id`)
REFERENCES `kategorije`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

-- promena polja iz int -> int(10) UNSIGNED
ALTER TABLE `kategorije_has_objave` 
CHANGE `kategorija_id` 
`kategorija_id` INT(10) UNSIGNED NOT NULL; 

-- Popunjavanje veze kategorija-objava
INSERT INTO `kategorije_has_objave` (`kategorija_id`, `objava_id`)
VALUES
(1, 1),
(5, 1),
(2, 2),
(4, 2),
(1, 3);