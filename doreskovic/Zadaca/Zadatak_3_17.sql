SELECT nazPred, nazOrgjed, upisanoStud
FROM pred
JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE upisanoStud>20;