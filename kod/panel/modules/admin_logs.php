<?php
global $CFG;
require_once($CFG->katalogStrony."panel/includes/class.AdminLog.php");

$smarty->assign('admin_logs',AdminLog::getAdminLogs());

?>