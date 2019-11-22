CREATE TABLE IF NOT EXISTS `osiris`.`Resident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE utilisateur (
	id	INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nom	VARCHAR(32) NOT NULL,
	pwd	VARCHAR(32) NOT NULL
) ENGINE = MYISAM;

CREATE TABLE medical (
	id			INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	poids		INT(3),
	taille		INT(3),
	codeCim10 VARCHAR(10)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


