#Tabeli loomine:

CREATE TABLE loomaaed_marie (id integer PRIMARY KEY auto_increment, nimi varchar(50) UNIQUE, vanus integer, liik varchar(50), puur integer)

#Tabelisse ridade sisestamine:

INSERT INTO `loomaaed_marie`(`id`, `nimi`, `vanus`, `liik`, `puur`) VALUES ('','Ott','6','karu','1'), ('','Miisu','4','ilves','2'), ('','Ruudi','2','rästik','3'), ('','Mõmmi','3','karu','1'), ('','Kiizu','3','ilves','2')

#Hankida kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number:

SELECT `nimi`, `puur` FROM `loomaaed_marie` WHERE `puur`='1'

#Hankida vanima ja noorima looma vanused:

SELECT MIN(`vanus`), MAX(`vanus`) FROM `loomaaed_marie`

#Hankida puuri number koos selles elavate loomade arvuga:

SELECT `puur`, COUNT(`puur`) FROM `loomaaed_marie` GROUP BY `puur`

#Suurendada kõiki tabelis olevaid vanuseid 1 aasta võrra:

UPDATE `loomaaed_marie` SET `vanus`=`vanus`+1