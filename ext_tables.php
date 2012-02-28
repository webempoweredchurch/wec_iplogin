<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::addLLrefForTCAdescr('tx_weciplogin_accounts','EXT:wec_iplogin/csh/locallang_csh_txweciploginaccounts.php');

$TCA["tx_weciplogin_accounts"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:wec_iplogin/locallang_db.xml:tx_weciplogin_accounts',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'disabled',	
			'starttime' => 'starttime',	
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_weciplogin_accounts.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "disabled, starttime, endtime, name, ip, feusergroup",
	)
);
?>