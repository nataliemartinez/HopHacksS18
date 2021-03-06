
CREATE TABLE IF NOT EXISTS users(
	username varchar(32) NOT NULL,
	password varchar(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS measurements(
	username varchar(32) NOT NULL,
	height int NOT NULL,
	shoulder int NOT NULL,
	chest int NOT NULL,
	waist int NOT NULL,
	hips int NOT NULL,
	inseam int NOT NULL
);

CREATE TABLE IF NOT EXISTS clothing(
	ID int NOT NULL,
	num_purchases int(10) DEFAULT 0,
	num_returns int(10) DEFAULT 0
);

CREATE TABLE IF NOT EXISTS feedback(
	clothing_ID int DEFAULT 0,
	height int DEFAULT 0,
	shoulder int DEFAULT 0,
	chest int DEFAULT 0,
	waist int DEFAULT 0,
	hips int DEFAULT 0,
	inseam int DEFAULT 0
);
