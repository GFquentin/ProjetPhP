CREATE DATABASE projetphp;
USE projetphp;

CREATE TABLE IF NOT EXISTS projetphp.task
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  script VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.host
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  ip VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.user
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  login VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.flow
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  exec_time INT NOT NULL,
  userId INT NOT NULL,
  CONSTRAINT flow_userid_fk FOREIGN KEY (userId) REFERENCES user(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.taskflow
(
  taskId INT NOT NULL,
  flowId INT NOT NULL,
  ordertask INT NOT NULL,
  CONSTRAINT taskflow_taskid_fk FOREIGN KEY (taskId) REFERENCES task(id),
  CONSTRAINT taskflow_flowid_fk FOREIGN KEY (flowId) REFERENCES flow(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.flowhost
(
  flowId INT NOT NULL,
  hostId INT NOT NULL,
  CONSTRAINT flowhost_flowid_fk FOREIGN KEY (flowId) REFERENCES flow(id),
  CONSTRAINT flowhost_hostid_fk FOREIGN KEY (hostId) REFERENCES host(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.flowuser
(
  flowId INT NOT NULL,
  userId INT NOT NULL,
  CONSTRAINT flowuser_flowid_fk FOREIGN KEY (flowId) REFERENCES flow(id),
  CONSTRAINT flowuser_userid_fk FOREIGN KEY (userId) REFERENCES user(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.taskexecution
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  taskId INT NOT NULL,
  starttime DATETIME NOT NULL,
  status INT NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS projetphp.flowexecution
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  flowId INT NOT NULL,
  starttime DATETIME NOT NULL,
  status INT NOT NULL,
  CONSTRAINT flowexecution_flowid_fk FOREIGN KEY (flowId) REFERENCES flow(id)
) ENGINE=InnoDB;
