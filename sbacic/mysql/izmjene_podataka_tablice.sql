#Zadatak 4.1.
USE upisi_polaznika;

UPDATE tecajevi
SET naziv_tecaja='Poslovna informatika'
WHERE naziv_tecaja='PHP-osnove';

#Zadatak 4.2.
USE upisi_polaznika;
UPDATE upisi
SET sifra_tecaja='Z03'
WHERE id=6;

#Zadatak 4.3.
USE upisi_polaznika;
DELETE FROM upisi
WHERE sifra_tecaja='N01';

#Zadatak 4.5.
USE fakultet;
CREATE VIEW Stanovanje AS
SELECT imeNastavnik,prezNastavnik,nazMjesto
FROM nastavnik
JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr;

SELECT * FROM Stanovanje;

#Zadatak 4.6.
USE fakultet;
CREATE VIEW ProlaznostIspita AS
SELECT imeStud,prezStud,nazPred,ocjena,
imeNastavnik,prezNastavnik
FROM stud
JOIN ispit ON stud.mbrStud=ispit.mbrStud
JOIN nastavnik ON nastavnik.sifNastavnik=ispit.sifNastavnik
JOIN pred ON pred.sifPred=ispit.sifPred;