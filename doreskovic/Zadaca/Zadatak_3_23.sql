SELECT imeStud, prezStud
FROM stud
JOIN mjesto m1 on stud.pbrrod = m1.pbr
JOIN mjesto m2 on stud.pbrstan = m2.pbr
WHERE stud.pbrrod <> stud.prbstan
AND m1.sifzupanija = m2.sifzupanija;