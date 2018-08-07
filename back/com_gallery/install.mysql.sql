CREATE TABLE IF NOT EXISTS `#__kategorie_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(200) NOT NULL, 
  PRIMARY KEY (`id`)
)


CREATE TABLE IF NOT EXISTS `#__projekty_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(128) NOT NULL,
  `opis` varchar(128) NOT NULL,
  `kategoria` varchar(128) NOT NULL,
  `id_zdjecia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) 



CREATE TABLE IF NOT EXISTS `#__zdjecia_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategorii` text NOT NULL,
  PRIMARY KEY (`id`)
) 