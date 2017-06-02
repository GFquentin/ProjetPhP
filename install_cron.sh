#!/bin/bash

path="/var/www/projetphp/job_checker.php";

if [ ! -f /etc/cron.d/projetphp ]; then
	echo "Adding a job running every minute in cron to check which jobs in database to run.";
	echo "* * * * * php-cli -f $path >/dev/null 2>&1" > /etc/cron.d/projetphp;
else
	echo "Job already present!";
fi
