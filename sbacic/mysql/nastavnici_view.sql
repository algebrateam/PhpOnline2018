CREATE VIEW v_nastavnici AS
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
mjesto.nazMjesto
FROM nastavnik LEFT JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr;