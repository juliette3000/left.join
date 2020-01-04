CREATE TABLE IF NOT EXISTS Resident (
  id	int(11)		NOT NULL AUTO_INCREMENT,
  nom	VARCHAR(32)	NOT NULL,
  PRIMARY KEY (id)
) DEFAULT CHARSET=latin1;

CREATE TABLE utilisateur (
	id	INT(6)		NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nom	VARCHAR(32) NOT NULL,
	pwd	VARCHAR(32) NOT NULL
);

CREATE TABLE social (
	id				INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sexe			CHAR(1),
	annee_naissance	INT(3)
) DEFAULT CHARSET=latin1;

CREATE TABLE medical (
	id			INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	poids		INT(3),
	taille		INT(3),
	cim10	VARCHAR(32),
	douleur		INT(1),
	ip			VARCHAR(64),
	date		VARCHAR(64),
	info		VARCHAR(64)
) DEFAULT CHARSET=latin1;

CREATE TABLE medical_motif_entree (
	id			INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idMedical	INT(6),
	motif		VARCHAR(64)
) DEFAULT CHARSET=latin1;





