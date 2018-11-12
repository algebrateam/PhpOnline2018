# selektiraj sve studente
SELECT * FROM stud;

# selektiraj samo one koji počinju sa "K"
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

# 3.4 Zadaci za vježbu

#3.2 imena, prezimena svih studenata u jednom stupcu:
SELECT 
CONCAT(stud.imeStud," ",stud.prezStud) AS imeprezime
FROM stud;

#3.3 sva imena samo jedanput, sotirano po abecedi
SELECT
DISTINCT stud.imeStud # bez distinct 302,  jedinstvenih 171
FROM stud
ORDER BY stud.imeStud ASC;

#3.4 maticni broj studenta koji je prosao ispit pod brojem 146
SELECT 
stud.mbrStud 
FROM stud INNER JOIN ispit
ON stud.mbrStud=ispit.mbrStud
WHERE ispit.sifPred=146 AND ispit.ocjena>1;

#3.5 ime, prez nastavnika te plaću pomocu (koef+0,4)*800 
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik;

#3.6 ime, prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
WHERE (nastavnik.koef+0.4)*800<3500 OR (nastavnik.koef+0.4)*800>8000; #WHERE ne podrzava aliase

#3.6 ime, prez nastavnika te plaću pomocu (koef+0,4)*800 , te samo ona s plaćom <3500 i >8000
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa
FROM nastavnik
HAVING placa<3500 OR placa>8000;   # ako koristimo aliase moramo ubaciti having


# treci nacin
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

#3.7 ime, prez studenta koji imaju ocjenu 1 iz predmeta 220-240
SELECT 
stud.imeStud,
stud.prezStud
FROM stud INNER JOIN ispit
ON stud.mbrStud=ispit.mbrStud
WHERE ispit.sifPred BETWEEN 220 AND 240
AND ocjena<2;

#3.8 ime, prez studenta koji imaju ocjenu 3
SELECT 
stud.imeStud,
stud.prezStud,
ispit.ocjena
FROM stud INNER JOIN ispit
ON stud.mbrStud=ispit.mbrStud
WHERE ispit.ocjena=3;

#3.9 naziv predmeta koji nije nitko isao na ispit
SELECT nazPred FROM
pred LEFT JOIN ispit
ON pred.sifPred=ispit.sifPred
WHERE ispit.mbrStud IS NULL; 

#3.9 TOP 5 predmeta koji studenti najradje izlaze
SELECT 
COUNT(mbrStud) izisli_na_ispit,
nazPred 
FROM ispit LEFT JOIN pred
ON pred.sifPred=ispit.sifPred
GROUP BY nazPred
ORDER BY izisli_na_ispit DESC
LIMIT 5; 

#3.10 naziv predmeta na koji je izisao barem jedan student
SELECT 
nazPred 
FROM ispit LEFT JOIN pred
ON pred.sifPred=ispit.sifPred
GROUP BY nazPred
ORDER BY nazPred;

#3.11 sve podatke o studentu sa pocetnim i zadnjim slovom a,e,i,o,u
SELECT *
FROM stud
WHERE stud.imeStud REGEXP '^[aeiou].*[aeiou]$'; #WHERE stud.imeStud LIKE '[aeiou]%[aeiou]';  NE _RADI PRIMJER IZ KNJIGE?

#3.12 ime pocinje i zavrsava s bilo cime osim samoglasnikom
SELECT *
FROM stud
WHERE stud.imeStud NOT RLIKE '^[aeiouAEIOU].*$'; #not rlike '^[aeiouAEIOU].*$'; #WHERE stud.imeStud LIKE '[aeiou]%[aeiou]';  

