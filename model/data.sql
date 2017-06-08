INSERT INTO task (script) VALUES ('/opt/test.sh');

INSERT INTO host (name, ip) VALUES ('debian-anthony', '192.168.14.224');

INSERT INTO user (login, password) VALUES ('job', 'job');

<<<<<<< HEAD
INSERT INTO flow (name, exec_time) VALUES ('flow1', '120');
INSERT INTO flow (name, exec_time) VALUES ('flow2', '120');
INSERT INTO flow (name, exec_time) VALUES ('flow3', '120');
INSERT INTO flow (name, exec_time) VALUES ('flow4', '120');

INSERT INTO taskflow (taskId, flowId, ordertask) VALUES (1, 1, 1);

INSERT INTO flowhost (flowId, hostId) VALUES (1, 1);

INSERT INTO flowuser (flowId, userId) VALUES (1, 1);

INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061224 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (2, '20061225 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061226 23:59:59', 2);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (2, '20061227 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061228 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061229 23:59:59', 2);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (2, '20061230 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061231 23:59:59', 1);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (3, '20061024 23:59:59', 0);
INSERT INTO flowexecution (flowId, starttime, status) VALUES (1, '20061124 23:59:59', 1);

INSERT INTO flow (name, exec_time, userId) VALUES ('flow1', '120', 1);

INSERT INTO taskflow (taskId, flowId, ordertask) VALUES (1, 1, 1);

INSERT INTO flowhost (flowId, hostId) VALUES (1, 1);

INSERT INTO flowuser (flowId, userId) VALUES (1, 1);
