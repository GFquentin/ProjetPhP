INSERT INTO projetphp.task (script) VALUES ('/opt/test.sh');

INSERT INTO projetphp.host (name, ip) VALUES ('debian-anthony', '192.168.14.224');

INSERT INTO projetphp.user (login, password) VALUES ('job', 'job');

INSERT INTO projetphp.flow (name, exec_time, userId) VALUES ('flow1', '120', 1);
INSERT INTO projetphp.flow (name, exec_time, userId) VALUES ('flow2', '120', 1);
INSERT INTO projetphp.flow (name, exec_time, userId) VALUES ('flow3', '120', 1);
INSERT INTO projetphp.flow (name, exec_time, userId) VALUES ('flow4', '120', 1);



INSERT INTO projetphp.taskflow (taskId, flowId, ordertask) VALUES (1, 1, 1);

INSERT INTO projetphp.flowhost (flowId, hostId) VALUES (1, 1);

INSERT INTO projetphp.flowuser (flowId, userId) VALUES (1, 1);

INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061224 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (2, '20061225 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061226 23:59:59', 2);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (2, '20061227 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061228 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061229 23:59:59', 2);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (2, '20061230 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061231 23:59:59', 1);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (3, '20061024 23:59:59', 0);
INSERT INTO projetphp.flowexecution (flowId, starttime, status) VALUES (1, '20061124 23:59:59', 1);
