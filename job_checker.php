<?php
/* Requirements */
require_once 'controllers/jobchecker.php';

/* Core */
$jobchecker=JobChecker::getInstance();
$jobchecker->runFlows();
?>
