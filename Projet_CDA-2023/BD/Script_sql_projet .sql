#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Vol
#------------------------------------------------------------

CREATE TABLE Vol(
        id_vol        Int  Auto_increment  NOT NULL ,
        ville_depart  Varchar (30) NOT NULL ,
        ville_arrivee Varchar (30) NOT NULL ,
        date_depart   Date NOT NULL ,
        date_arrivee  Date NOT NULL ,
        heure_depart  Time NOT NULL ,
        heure_arrivee Time NOT NULL ,
        prix          Float NOT NULL
	,CONSTRAINT Vol_PK PRIMARY KEY (id_vol)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id_client Int  Auto_increment  NOT NULL ,
        nom       Varchar (30) NOT NULL ,
        prenom    Varchar (30) NOT NULL ,
        sexe      Enum ("Feminin") NOT NULL ,
        telephone Int NOT NULL ,
        email     Varchar (30) NOT NULL ,
        password  Int NOT NULL
	,CONSTRAINT Client_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Reservation
#------------------------------------------------------------

CREATE TABLE Reservation(
        id_reservation   Int  Auto_increment  NOT NULL ,
        date_reservation Date NOT NULL ,
        id_client        Int NOT NULL ,
        id_vol           Int NOT NULL
	,CONSTRAINT Reservation_PK PRIMARY KEY (id_reservation)

	,CONSTRAINT Reservation_Client_FK FOREIGN KEY (id_client) REFERENCES Client(id_client)
	,CONSTRAINT Reservation_Vol0_FK FOREIGN KEY (id_vol) REFERENCES Vol(id_vol)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Achat
#------------------------------------------------------------

CREATE TABLE Achat(
        id_achat      Int  Auto_increment  NOT NULL ,
        date_achat    Date NOT NULL ,
        qte_achat     Int NOT NULL ,
        prix_achat    Float NOT NULL ,
        mode_paiement Varchar (50) NOT NULL ,
        id_client     Int NOT NULL
	,CONSTRAINT Achat_PK PRIMARY KEY (id_achat)

	,CONSTRAINT Achat_Client_FK FOREIGN KEY (id_client) REFERENCES Client(id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Billet
#------------------------------------------------------------

CREATE TABLE Billet(
        num_billet    Int  Auto_increment  NOT NULL ,
        date_emission Date NOT NULL ,
        classe        Varchar (50) NOT NULL ,
        Montant       Float NOT NULL ,
        siege         Int NOT NULL ,
        id_vol        Int NOT NULL ,
        id_achat      Int NOT NULL
	,CONSTRAINT Billet_PK PRIMARY KEY (num_billet)

	,CONSTRAINT Billet_Vol_FK FOREIGN KEY (id_vol) REFERENCES Vol(id_vol)
	,CONSTRAINT Billet_Achat0_FK FOREIGN KEY (id_achat) REFERENCES Achat(id_achat)
)ENGINE=InnoDB;

