SELECT stud.*, nastavnik.*
FROM stud,nastavnik
WHERE stud.prezStud=nastavnik.prezNastavnik;