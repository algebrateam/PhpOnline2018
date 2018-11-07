#3.13 ime pocinje ili zavrsava sa samoglasnikom
SELECT *
FROM stud
WHERE stud.imeStud REGEXP '^[aeiou].|[aeiou]$'; 

#3.14 ime ili prezime bilo gdje sadrzava slova n i k jedno iza drugog
SELECT *
FROM stud
WHERE stud.imeStud LIKE '%nk%' OR stud.prezStud LIKE '%nk%';

#3.15 ime i prezime studenta te naziv i ocjena za svaki ispit
SELECT imeStud, prezStud, nazPred, ocjena
FROM ispit i
JOIN stud s ON i.mbrStud=s.mbrStud
JOIN pred p ON p.sifPred=i.sifPred;

#3.16 imena i prezimena studenata te mjesto i zupaniju rođenja, nakon toga dodajte mjesto i zupaniju u kojoj stanuju
SELECT imeStud, prezStud,
		m.nazMjesto AS 'Mjesto rođenja',
		z.nazZupanija AS 'Županija rođenja',
		m2.nazMjesto AS 'Mjesto boravka',
		z2.nazZupanija AS 'Županija boravka'
FROM stud s
JOIN mjesto m ON m.pbr=s.pbrRod
JOIN zupanija z ON z.sifZupanija=m.sifZupanija
JOIN mjesto m2 ON s.pbrStan=m2.pbr
JOIN zupanija z2 ON z2.sifZupanija=m2.sifZupanija;

#3.17 nazivi predmeta i organizacijske jedinice kojima pripadaju za kolegije koji imaju više od 20 upisanih studenata
SELECT nazPred, NazOrgjed, upisanoStud
FROM pred
JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE upisanoStud>20;

#3.18 Svi nazivi mjesta u kojima stanuje bar jedan student, imena mjesta se smiju samo jednom pojaviti
SELECT DISTINCT nazMjesto
FROM mjesto
JOIN stud ON mjesto.pbr=stud.pbrStan;	

#3.19 Svi nazivi mjesta u kojima je barem jedan student i rođen i stanuje, imena mjesta se smiju samo jednom pojaviti
SELECT DISTINCT nazMjesto
FROM mjesto
JOIN stud ON mjesto.pbr=stud.pbrStan
WHERE pbrStan=pbrRod;

#3.20 Oznake dvorana i nazivi kolegija za one kolegije koji imaju više od 2 sata predavanja tjedno
SELECT nazPred, oznDvorana
FROM pred
LEFT JOIN rezervacija
	ON pred.sifPred=rezervacija.sifPred 
WHERE brojSatiTjedno>2;

#3.21 Ispisite nazive kolegija i i oznake dvorana u kojima imaju rezerviran termin. Ispisati i naziv org. jedinice kojoj kolegij pripada
SELECT nazPred, oznDvorana, nazOrgjed
FROM pred
JOIN rezervacija ON pred.sifPred=rezervacija.sifPred
JOIN orgjed ON orgjed.sifOrgjed=pred.sifOrgjed;

#3.22 Podaci o nastavnicima koji su ispitivali studente koji stanuju u istoj zupaniji u kojoj stanuje i nastavnik
SELECT DISTINCT imeNastavnik, prezNastavnik
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
JOIN stud ON ispit.mbrStud=stud.mbrStud
JOIN mjesto m1 ON m1.pbr=stud.pbrStan
JOIN mjesto m2 ON m2.pbr=nastavnik.pbrStan
WHERE m1.sifZupanija=m2.sifZupanija;

#3.23 Podaci o studentima koji studiraju u mjestu razlicitom od mjesta rođenja ali u istoj zupaniji
SELECT imeStud, prezStud
FROM stud
JOIN mjesto m1 ON stud.pbrRod=m1.pbr
JOIN mjesto m2 ON stud.pbrStan=m2.pbr
WHERE stud.pbrRod<>stud.pbrStan
AND m1.sifZupanija=m2.sifZupanija;

#3.24 Podaci ostudentima i nastavnicima s istim prezimenima
SELECT stud.*, nastavnik.*
FROM stud, nastavnik
WHERE stud.prezStud=nastavnik.prezNastavnik;

#3.25 Podaci o studentima i mjestima stanovanja za one koji su pali "Osnove baze podataka"
SELECT DISTINCT imeStud, prezStud, nazMjesto
FROM stud
JOIN mjesto ON mjesto.pbr=stud.pbrStan
JOIN ispit ON stud.mbrStud=ispit.mbrStud
JOIN pred ON pred.sifPred=ispit.sifPred
WHERE nazPred='Osnove baza podataka' AND ocjena=1;

#3.26 Imena i prezimena, mjesto stanovanja i zupanija  nastavnika te naziv kolegija za nastavnike koji su ispitivali studente koji su dobili ocjenu 2 ili 3 iz tog kolegija
SELECT imeNastavnik, prezNastavnik, nazMjesto, nazZupanija, nazPred, ocjena
FROM nastavnik
JOIN mjesto ON mjesto.pbr=nastavnik.pbrStan
JOIN zupanija ON zupanija.sifZupanija=mjesto.sifZupanija
JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
JOIN pred ON pred.sifPred=ispit.sifPred
WHERE ocjena=2 OR ocjena=3;