CREATE VIEW v_ispiti_detaljno AS 
SELECT
s.imeStud,
s.prezStud,
i.ocjena,
p.nazPred,
n.imeNastavnik,
n.prezNastavnik
FROM stud s INNER JOIN ispit i ON s.mbrStud=i.mbrStud
LEFT JOIN nastavnik n ON n.sifNastavnik=i.sifNastavnik
LEFT JOIN pred p ON i.sifPred=p.sifPred LIMIT 50;


SELECT * FROM v_ispiti_detaljno;