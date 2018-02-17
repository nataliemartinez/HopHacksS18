
CREATE TABLE IF NOT EXISTS users(
	ID int NOT NULL AUTO_INCREMENT,
	username varchar(32) NOT NULL,
	password varchar(32) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS measurements(
	user_ID int NOT NULL,
	height int NOT NULL,
	shoulder int NOT NULL,
	chest int NOT NULL,
	waist int NOT NULL,
	hips int NOT NULL,
	inseam int NOT NULL,
	CONSTRAINT fk_user_ID FOREIGN KEY (user_ID) REFERENCES users(ID)
);

CREATE TABLE IF NOT EXISTS clothing(
	ID int NOT NULL AUTO_INCREMENT,
	username varchar(32) NOT NULL,
	password varchar(32) NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS feedback(
	clothing_ID int DEFAULT 0,
	height int DEFAULT 0,
	shoulder int DEFAULT 0,
	chest int DEFAULT 0,
	waist int DEFAULT 0,
	hips int DEFAULT 0,
	inseam int DEFAULT 0,
	FOREIGN KEY (clothing_ID) REFERENCES clothing(ID)
);

