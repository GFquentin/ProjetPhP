INSERT INTO task (script) VALUES ('/opt/test.sh');

INSERT INTO host (name, ip) VALUES ('debian-anthony', '192.168.14.224');

INSERT INTO user (login, password) VALUES ('job', 'job');

INSERT INTO flow (name, exec_time, userId) VALUES ('flow1', '120', 1);

INSERT INTO taskflow (taskId, flowId, ordertask) VALUES (1, 1, 1);

INSERT INTO flowhost (flowId, hostId) VALUES (1, 1);

INSERT INTO flowuser (flowId, userId) VALUES (1, 1);
