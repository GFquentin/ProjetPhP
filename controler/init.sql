CREATE DATABASE projetPHP;
USE projetPHP;

CREATE TABLE flow
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    exec_time INT,
    last_exec TIME
);

CREATE TABLE host
(
    name VARCHAR(100) PRIMARY KEY NOT NULL,
    ip VARCHAR(100)
);

CREATE TABLE user
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login VARCHAR(100),
    password VARCHAR(255),
);

CREATE TABLE task
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    script VARCHAR(100)
);

CREATE TABLE taskflow
(
    id_task INT FOREIGN KEY REFERENCES task(id),
    id_flow INT FOREIGN KEY REFERENCES flow(id)
);


CREATE TABLE flowhost
(
	id_flow INT FOREIGN KEY REFERENCES flow(id),
	hostname INT FOREIGN KEY REFERENCES host(name)
);

CREATE TABLE flowuser
(
	id_flow INT FOREIGN KEY REFERENCES flow(id),
	userid INT FOREIGN KEY REFERENCES user(id)
);


CREATE TABLE execution
(	
	exec_id INT PRIMARY KEY NOT NULL,
	id_task INT FOREIGN KEY REFERENCES task(id),
	exec_date DATE,
	status INT

);
