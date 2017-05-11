INSERT INTO projetphp.task (script) VALUES ('/opt/test.sh');

INSERT INTO projetphp.host (name, ip) VALUES ('debian-anthony', '192.168.14.224');

INSERT INTO projetphp.user (login, password) VALUES ('job', 'job');

INSERT INTO projetphp.flow (name, exec_time, userId) VALUES ('flow1', '120', 0);

INSERT INTO projetphp.taskflow (taskId, flowId, ordertask) VALUES (0, 0, 1);

INSERT INTO projetphp.flowhost (flowId, hostId) VALUES (0, 0);

INSERT INTO projetphp.flowuser (flowId, userId) VALUES (0, 0);
