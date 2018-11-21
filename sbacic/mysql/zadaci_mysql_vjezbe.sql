#selektiraj sve studente
SELECT * FROM stud;

#selektiraj one studente koji počinju s "K"
SELECT * FROM stud WHERE prezStud LIKE 'K%';

# svi Mate, Ivo i Iva
SELECT prezStud FROM stud WHERE imestud IN ('Mato', 'Ivo', 'Iva');

# Podselekcija, svi Mate, Ivo i Iva čija prezimena počinju sa "K"
SELECT * FROM (
 SELECT prezStud FROM stud WHERE imestud IN ('Mato', 'Ivo', 'Iva')
 ) AS temp1
 WHERE prezStud LIKE 'K%';
 
 #Dohvati sva mjesta
 SELECT * FROM mjesto;
 
 #Dohvati sve županije
 SELECT * FROM zupanija;
 
 #Dohvati sva mjesta i pripadajuće županije koje počinju na Z (zagrebacka i Zadarska)
 SELECT 
 mjesto.pbr,
 mjesto.nazMjesto,
 zupanija.nazZupanija 
 FROM mjesto LEFT JOIN zupanija
 ON mjesto.sifZupanija=zupanija.sifZupanija
 WHERE zupanija.nazZupanija LIKE 'Z%' 
 ORDER BY nazZupanija DESC,nazMjesto ASC;
 
 # cross join (kartezijev produkt)
 # 26.852 retka !!!  OPREZ NE RADI SE OVAKO!!!!
 #SELECT * FROM nastavnik, mjesto;
 
 # LEFT VS RIGHT JOIN
SELECT *
 FROM nastavnik LEFT JOIN mjesto # ili  FROM mjesto RIGHT JOIN nastavnik
 ON mjesto.pbr =nastavnik.pbrStan;
 
 # INNER JOIN (presjek)
SELECT *
 FROM nastavnik INNER JOIN mjesto # ili  FROM mjesto RIGHT JOIN nastavnik
 ON mjesto.pbr =nastavnik.pbrStan;
 
 #Dohvati sva mjesta u kojima ne žive nastavnici:
SELECT 
mjesto.pbr,
mjesto.nazMjesto
 FROM mjesto LEFT JOIN nastavnik  
 ON mjesto.pbr =nastavnik.pbrStan
WHERE nastavnik.sifNastavnik IS NULL;

#3.4 Zadaci za vježbu

#3.2 imena, prezimena svih studenata u jednom stupcu:
SELECT mbrStud,
CONCAT(imeStud,' ',prezStud) AS imeiprezime
FROM stud;

#3.3.sva imena samo jedanput sortirano po abecedi
SELECT 
DISTINCT stud.imeStud
FROM stud
ORDER BY stud.imeStud ASC;

#3.4.Ispiši matične brojeve studenata koji su položili ispit iz predmeta sa šifrom 146
SELECT 
stud.mbrStud 
FROM stud INNER JOIN ispit ON ispit.mbrStud=stud.mbrStud
WHERE ispit.sifPred=146 AND ispit.ocjena>1;

#3.5.Ispiši ime i prezime nastavnika,te plaću dobivenu formulom(koeficijent+0.4)*800
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik;

#3.6.ime,prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
WHERE(nastavnik.koef+0.4)*800<3500 OR(nastavnik.koef+0.4)*800>8000; #WHERE ne podrzava aliase

#3.6.ime, prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
HAVING placa<3500 OR placa>8000;  # ako koristimo aliase moramo ubaciti having

#treci nacin
#3.6 ime, prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
HAVING placa NOT BETWEEN 3500 AND 8000;

# četvrti nacin
#3.6 ime, prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT *
FROM(
SELECT
nastavnik.imeNastavnik AS ime,
nastavnik.prezNastavnik AS prezime,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
) AS T1
WHERE placa NOT BETWEEN 3500 AND 8000; 

#3.7 Ispiši imena i prezimena studenata koji su bar jednom pali na ispitu iz predmeta sa šiframa od 220 do 240
SELECT 
stud.imeStud,
stud.prezStud
FROM stud INNER JOIN ispit ON ispit.mbrStud=stud.mbrStud
WHERE ispit.sifPred BETWEEN 220 AND 240
AND ocjena<2;

#3.8.Ispiši imena i prezimena studenata koji su na nekom ispitu dobili 3
SELECT
stud.imeStud,
stud.prezStud
FROM stud INNER JOIN ISPIT ON stud.mbrStud=ispit.mbrStud
WHERE ispit.ocjena=3;

#3.9.Ispiši nazive predmeta na koje nije izašao niti jedan student
SELECT nazPred FROM
pred LEFT JOIN ispit ON pred.sifPred=ispit.sifPred
WHERE ispit.mbrStud IS NULL;

#3.9. TOP 5 predmeta na koje studenti najradje izlaze
SELECT 
COUNT(mbrStud) izisli_na_ispit,
nazPred 
FROM ispit LEFT JOIN pred
ON pred.sifPred=ispit.sifPred
GROUP BY nazPred
ORDER BY izisli_na_ispit DESC
LIMIT 5;

#3.10. Ispiši nazive predmeta na koje je izašao barem jedan student
SELECT
DISTINCT nazPred
FROM pred INNER JOIN ispit ON ispit.sifPred=pred.sifPred;

#3.11. Ispišite sve podatke o studentima čije ime počinje i završava samoglasnikom
SELECT * FROM stud
WHERE stud.imeStud REGEXP '^[aeiou].*[aeiou]$';

#3.12.ime pocinje i zavrsava s bilo cime osim samoglasnikom
SELECT * FROM stud
WHERE stud.imeStud NOT RLIKE '^[aeiouAEIOU].*$'; 

#3.13.



