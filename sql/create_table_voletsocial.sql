CREATE TABLE social
(
   id								INT(11)			NOT NULL AUTO_INCREMENT,
   sexe								VARCHAR(50)		NOT NULL,
   annee_naissance					INT(4)			NOT NULL,
   date_entree						DATE			NOT NULL,
   mode_admission					VARCHAR(50)		NOT NULL,
   mode_admission_autre				VARCHAR(50)		NULL,
   statut_admin						VARCHAR(100)	NOT NULL,
   couv_sociale						VARCHAR(50)		NOT NULL,
   couv_socialec					VARCHAR(100)	NOT NULL,
   aah								VARCHAR(50)		NOT NULL,
   pch								VARCHAR(50)		NOT NULL,
   invalidite						VARCHAR(50) 	NOT NULL,
   accord_mdph_fam					VARCHAR(50) 	NOT NULL,
   accord_mdph_savs					VARCHAR(50) 	NOT NULL,
   accord_mdph_samsah				VARCHAR(50) 	NOT NULL,
   aide_soc_fam						VARCHAR(50)		NULL,
   aide_soc_savs					VARCHAR(50)		NULL,
   aide_soc_samsah					VARCHAR(50) 	NULL,
   departement_mdph					INT(3)			NULL,
   situation_recherche_place		VARCHAR(50)		NULL,
   date_demande						DATE 			NULL,
   nombre_refus						INT(3)			NULL,
   derogation_age_ehpad				VARCHAR(50) 	NOT NULL,
   aide_soc_ehpad					VARCHAR(50) 	NOT NULL,
   situation_place_ehpad			VARCHAR(50) 	NOT NULL,
   protection_juridique				VARCHAR(50) 	NOT NULL,
   protection_juridique_precision	VARCHAR(50)		NULL,
   PRIMARY KEY (id)
)
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci
;
