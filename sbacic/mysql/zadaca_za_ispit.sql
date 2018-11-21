#3.15. Ime i prezime studenta te naziv i ocjenu za svaki ispit

SELECT imeStud,prezStud,nazPred,ocjena 
FROM ispit i 
JOIN stud s ON i.mbrStud=s.mbrStud
JOIN pred p ON p.sifPred=i.sifPred;

#3.17. Ispiši nazive predmeta i organizacijske jedinice kojima pripadaju za one kolegije koji imaju više od 20 upisanih studenata

SELECT nazPred,nazOrgjed,upisanoStud
FROM pred
JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE UPISANOStud>20;

#3.18.Ispiši sve nazive mjesta u kojima stanuje bar jedan student.Imnena mjesta se smiju pojaviti samo jednom
SELECT DISTINCT nazMjesto
FROM mjesto
JOIN stud ON mjesto.pbr=stud.pbrStan;

#3.19.Ispiši nazive mjesta u kojima je barem jedan student rođen i stanuje.Imena mjesta se smiju pojaviti jednom

SELECT DISTINCT nazMjesto
FROM mjesto
JOIN stud on mjesto.pbr=stud.pbrStan
WHERE pbrStan=pbrRod;

#3.24. Ispiši podatke o studentima i nastavnicima koji imaju ista prezimena

SELECT stud.*, nastavnik.*
FROM stud,nastavnik
WHERE stud.prezStud=nastavnik.prezNastavnik;

#3.23. Ispiši podatke o studentima koji studiraju u mjestu različitom od mjesta rođenja,ali koje se nalazi u istoj županiji u kojoj su i rođeni

SELECT imeStud, prezStud
FROM stud
JOIN mjesto m1 on stud.pbrrod = m1.pbr
JOIN mjesto m2 on stud.pbrstan = m2.pbr
WHERE stud.pbrrod <> stud.pbrstan
AND m1.sifzupanija = m2.sifzupanija;

# 3.13. Ispišite sve podatke o studentima kojima počinje ili završava samoglasnikom

SELECT * From stud
WHERE 
LEFT(imeStud,1) IN ('a','e','i','o','u')
OR
RIGHT(imeStud,1) IN ('a','e','i','o','u');

# 3.22. Ispišite podatke o nastavnicima koji su ispitivali studente koi stanuju u istoj županiji u kojoj stanuje i nastavnik.

SELECT DISTINCT imeNastavnik,prezNastavnik
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
JOIN stud ON ispit.mbrStud=stud.mbrStud
JOIN mjesto m1 ON m1.pbr=stud.pbrStan
JOIN mjesto m2 ON m2.pbr=nastavnik.pbrStan
WHERE m1.sifZupanija=m2.sifZupanija;

#3.20. Ispišite nazive kolegija i oznake dvorana u kojima imaju rezerviran termin.Ispišite i naziv organizacijske jedinice kojoj kolegij pripada

SELECT nazPred, oznDvorana, nazOrgjed
FROM pred
JOIN dvorana ON dvorana.oznDvorana=pred.sifOrgjed
JOIN orgjed ON orgjed.sifOrgjed=pred.sifOrgjed;