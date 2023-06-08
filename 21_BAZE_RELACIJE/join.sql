-- 1. Napisati sve ispite koje su održani na fakultetu 
-- (ispisati ime i prezime studenta koji polaze ispit, 
-- naziv predmeta, 
-- ime i prezime profesora, 
-- datum polaganja, 
-- kao i ocenu koju je dobio).

SELECT  
CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv` as `naziv_predmeta`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS  `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

-- 2. Uraditi prethodni zadatak, samo ispisati one ispite koji su se polagali određenog dana.
SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS  `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum`="2023-05-15";

-- 3. Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
-- ovaj upit vraca vise podataka nego sto zadatak trazi (ima nepotrebne informacije ali su one tacne) - VISE KOLONA, BROJ REDOVA JE U REDU
SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS  `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`="Nikola" AND `studenti`.`prezime`="Devic";

-- 3. Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime`="Nikola" AND `studenti`.`prezime`="Devic";

-- 3. Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `ispiti`.`student_indeks`= (SELECT `indeks` from `studenti` WHERE `ime`="Nikola" AND `prezime`="Devic");


-- 4. Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.
-- ovaj upit vraca vise podataka nego sto zadatak trazi (ima nepotrebne informacije ali su one tacne) - VISE KOLONA, BROJ REDOVA JE U REDU
SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`.`prezime`) AS  `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`="Nikola" AND `studenti`.`prezime`="Devic"
AND `ispiti`.`ocena`>8;

-- 4. Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime`="Nikola" AND `studenti`.`prezime`="Devic"
AND `ispiti`.`ocena`>8;

-- 4. Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.
SELECT DISTINCT
`predmeti`.`naziv`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `ispiti`.`student_indeks`= (SELECT `indeks` from `studenti` WHERE `ime`="Nikola" AND `prezime`="Devic")
AND `ispiti`.`ocena`>8;

-- Broj ispita studenta na kojima je dobio minimalnu ocenu (minimalnu od svojih ocena)
SELECT count(`ispiti`.`id`)
FROM `ispiti`
WHERE `ispiti`.`student_indeks`= (SELECT `indeks` from `studenti` WHERE `ime`="Nikola" AND `prezime`="Devic")
AND `ispiti`.`ocena`=(SELECT MIN(`ocena`) FROM `ispiti` WHERE `ispiti`.`student_indeks`= (SELECT `indeks` from `studenti` WHERE `ime`="Nikola" AND `prezime`="Devic"));

-- 5. Za dato ime i prezime studenta, odrediti njegovu prosečnu ocenu.
SELECT AVG(`ipsiti`.`ocena`) as `srednja_ocena` FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime`="Nikola" AND `studenti`.`prezime`="Devic" 
AND `ispiti`.`ocena`>5;

-- 6. Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.
SELECT MAX(`ispiti`.`ocena`) as `max_ocena` FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `predmeti`.`naziv`='CSS'
AND `ispiti`.`datum` = '2023-04-17';

-- 7. Za dat datum i nastavnika odrediti prosečnu ocenu svih ispita koji su se polagali tog dana a koje je ocenio taj nastavnik.
SELECT AVG(`ispiti`.`ocena`) as `prosecna_ocena` FROM `ispiti`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum` = '2023-04-17'
AND `nastavnici`.`ime`='Stefan'
AND `ispiti`.`ocena`>5;

-- 8. Za dati datum ispisati imena i prezimena studenata koji nisu polagali ispit tog dana

-- studenti koji SU polagali
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student` FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `ispiti`.`datum`='2023-05-18';
-- isti upit sa alijasom za tabele
SELECT CONCAT(`s`.`ime`, " ", `s`.`prezime`) AS `student` FROM `ispiti` as `i`
LEFT JOIN `studenti` as `s` ON `i`.`student_indeks`=`s`.`indeks`
WHERE `i`.`datum`='2023-05-18'

-- studenti koji NISU polagali - bez LEFT JOIN
SELECT * FROM `studenti`
WHERE `studenti`.`indeks` NOT IN (SELECT `ispiti`.`student_indeks` from `ispiti` WHERE `ispiti`.`datum`='2023-05-18')

-- studenti koji NISU polagali - sa LEFT JOIN
SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student` FROM `studenti`
LEFT JOIN `ispiti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` AND `ispiti`.`datum`='2023-05-18'
WHERE `ispiti`.`id` IS NULL













