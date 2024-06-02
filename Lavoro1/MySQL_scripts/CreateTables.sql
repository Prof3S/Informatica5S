use ecomm;

create table if not exists Utenti(
	CodUtente int not null auto_increment,
    Username varchar(10) not null,
    Pwd varchar(8) not null,
    Nome varchar(20) not null,
    Cognome varchar(20) not null,
    Indirizzo varchar(20) not null,
    Telefono varchar(10) not null,
    primary key(CodUtente)
);

create table if not exists Fornitori(
	CodF int not null auto_increment,
    Nome varchar(10) not null,
    PIVA varchar(11) not null,
    Indirizzo varchar(20) not null,
    Telefono varchar(10) not null,
    primary key(CodF)
);

create table if not exists Ordini(
	Numero int not null auto_increment,
    Utente int,
    primary key(Numero),
    foreign key(Utente) references Utenti(CodUtente) 
);

create table if not exists Prodotti(
	UnitNum int not null auto_increment,
	CodP int not null ,
    Descrizione varchar(255) not null,
    Numero int,
    Fornitore int not null,
    Prezzo decimal not null,
    Ordine int,
    primary key(UnitNum),
    foreign key(Fornitore) references Fornitori(CodF),
    foreign key(Ordine) references Ordini(Numero)
);