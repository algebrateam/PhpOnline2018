USE skladiste;
ALTER TABLE Skladisno_mjesto
CHANGE Mjesto
Mjesto Enum('Zagreb','Rijeka','Sisak');