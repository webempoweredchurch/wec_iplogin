<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_weciplogin_accounts=1
');

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['initFEuser'][] = 'EXT:wec_iplogin/hooks/class.tx_weciplogin_hooks.php:&tx_weciplogin_hooks->login';
?>