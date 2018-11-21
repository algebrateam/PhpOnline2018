#Zadatak 5.1.
USE fakultet;
SELECT imeStud,prezStud,nazMjesto
FROM stud
JOIN mjesto ON mjesto.pbr=stud.pbrRod
WHERE imeStud LIKE 'F%';

#Zadatak 5.2.
USE fakultet;
SELECT imeNastavnik,prezNastavnik
FROM nastavnik
JOIN mjesto ON mjesto.pbr=nastavnik.pbrStan
WHERE SUBSTRING(nazMjesto,3,1)='Z';


#Zadatak 5.3.
USE fakultet;
SELECT imeStud,prezStud,imeNastavnik,prezNastavnik
FROM stud
JOIN ispit ON ispit.mbrStuvideoteka_2d=stud.mbrStud
JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik
WHERE
SUBSTRING(imeStud,5,1)=SUBSTRING(imeNastavnik,5,1);

#Zadatak 5.4.
USE fakultet;
SELECT nazZupanija FROM zupanija
WHERE LENGTH(nazZupanija) BETWEEN 13 AND 20;

#Zadatak 5.5.
SELECT imeStud,prezStud FROM stud
WHERE date_format(datRodStud,'%M')='May';

#Zadatak 5.6.
USE fakultet;
SELECT DISTINCT imeStud,prezStud 
FROM stud 
JOIN ispit ON ispit.mbrstud=stud.mbrStud
WHERE DAY(datIspit) BETWEEN 10 AND 20;

#Zadatak 5.7.
USE fakultet;
SELECT imeNastavnik,prezNastavnik,m1.nazMjesto,
imeStud,prezStud,m2.nazMjesto
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
JOIN mjesto m1 ON m1.pbr=nastavnik.pbrStan
JOIN stud ON stud.mbrStud=ispit.mbrStud
JOIN mjesto m2 ON m2.pbr=stud.pbrRod
WHERE MONTH(datIspit)=6 AND m1.nazMjesto=m2.nazMjesto;