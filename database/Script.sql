CREATE SEQUENCE "public".codejournal_id_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".compte_id_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".devise_id_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".ecriture_id_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".exercice_id_seq START WITH 1 INCREMENT BY 1;

CREATE SEQUENCE "public".mois_id_seq START WITH 1 INCREMENT BY 1;

CREATE  TABLE "public".codejournal ( 
	id                   serial  NOT NULL  ,
	code                 varchar(35)  NOT NULL  ,
	intitule             varchar(35)  NOT NULL  ,
	CONSTRAINT pk_codejournal PRIMARY KEY ( id ),
	CONSTRAINT unq_codejournal UNIQUE ( code ) 
 );

CREATE  TABLE "public".compte ( 
	id                   serial  NOT NULL  ,
	compte               integer  NOT NULL  ,
	intitule             varchar(35)  NOT NULL  ,
	CONSTRAINT pk_compte PRIMARY KEY ( id ),
	CONSTRAINT unq_compte_compte UNIQUE ( compte ) 
 );

CREATE  TABLE "public".devise ( 
	id                   serial  NOT NULL  ,
	monaie               varchar(35)  NOT NULL  ,
	change               double precision  NOT NULL  ,
	CONSTRAINT pk_devise PRIMARY KEY ( id )
 );

CREATE  TABLE "public".exercice ( 
	id                   serial  NOT NULL  ,
	datedebut            date  NOT NULL  ,
	datefin              date  NOT NULL  ,
	CONSTRAINT pk_exercice PRIMARY KEY ( id )
 );

CREATE  TABLE "public".mois ( 
	id                   serial  NOT NULL  ,
	numero_mois          integer  NOT NULL  ,
	nom                  varchar(35)  NOT NULL  ,
	CONSTRAINT pk_mois PRIMARY KEY ( id ),
	CONSTRAINT unq_mois UNIQUE ( numero_mois ) 
 );

CREATE  TABLE "public".ecriture ( 
	id                   serial  NOT NULL  ,
	idexercice           integer  NOT NULL  ,
	compte               integer  NOT NULL  ,
	codejournal          varchar(35)  NOT NULL  ,
	numero_mois          integer  NOT NULL  ,
	ref_piece            varchar(35)  NOT NULL  ,
	libelle              varchar(35)  NOT NULL  ,
	tiers                varchar(50)  NOT NULL  ,
	debit                double precision  NOT NULL  ,
	credit               double precision  NOT NULL  ,
	datecreation         date DEFAULT CURRENT_DATE NOT NULL  ,
	CONSTRAINT pk_ecriture PRIMARY KEY ( id )
 );

ALTER TABLE "public".ecriture ADD CONSTRAINT fk_ecriture_exercice FOREIGN KEY ( idexercice ) REFERENCES "public".exercice( id );

ALTER TABLE "public".ecriture ADD CONSTRAINT fk_ecriture_compte FOREIGN KEY ( compte ) REFERENCES "public".compte( compte );

ALTER TABLE "public".ecriture ADD CONSTRAINT fk_ecriture_mois FOREIGN KEY ( numero_mois ) REFERENCES "public".mois( numero_mois );

CREATE VIEW "public".v_journal AS  SELECT EXTRACT(day FROM ecriture.datecreation) AS jour,
    ecriture.ref_piece,
    ecriture.tiers,
    compte.intitule,
    ecriture.libelle,
    ecriture.debit,
    ecriture.credit,
    ecriture.codejournal,
    ecriture.numero_mois
   FROM ((((ecriture
     JOIN exercice ON ((ecriture.idexercice = exercice.id)))
     JOIN compte ON ((ecriture.compte = compte.compte)))
     JOIN codejournal ON (((ecriture.codejournal)::text = (codejournal.code)::text)))
     JOIN mois ON ((ecriture.numero_mois = mois.numero_mois)));

