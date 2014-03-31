<?php
// This part of code is based on FaSan's Skype Mod
$request = db_query("
	SHOW COLUMNS
	FROM {$db_prefix}members
	LIKE 'GG'", __FILE__, __LINE__);
$no_upgrade = mysql_num_rows($request) > 0;
mysql_free_result($request);

if (!$no_upgrade){
db_query("ALTER TABLE {$db_prefix}members
	ADD `Jabber` VARCHAR(25) NOT NULL AFTER `MSN`", __FILE__, __LINE__);
db_query("ALTER TABLE {$db_prefix}members
	ADD `Tlen` VARCHAR(25) NOT NULL AFTER `MSN`", __FILE__, __LINE__);
db_query("ALTER TABLE {$db_prefix}members
	ADD `GG` VARCHAR(16) NOT NULL AFTER `MSN`", __FILE__, __LINE__);	
}
?>