CREATE TABLE IF NOT EXISTS `osiris`.`Resident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS Formulaire (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom`			VARCHAR(32) NOT NULL,
  `codeCim10`	VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

ALTER TABLE formulaire CHANGE nom nom varchar(64);