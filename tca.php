<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_weciplogin_accounts"] = array (
	"ctrl" => $TCA["tx_weciplogin_accounts"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,starttime,endtime,name,ip,feusergroup"
	),
	"feInterface" => $TCA["tx_weciplogin_accounts"]["feInterface"],
	"columns" => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array (
					'upper' => mktime(0, 0, 0, 12, 31, 2020),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wec_iplogin/locallang_db.xml:tx_weciplogin_accounts.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"ip" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wec_iplogin/locallang_db.xml:tx_weciplogin_accounts.ip",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"feusergroup" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:wec_iplogin/locallang_db.xml:tx_weciplogin_accounts.feusergroup",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "fe_groups",	
				"size" => 5,	
				"minitems" => 0,
				"maxitems" => 99,
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "hidden;;1;;1-1-1, name, ip, feusergroup")
	),
	"palettes" => array (
		"1" => array("showitem" => "starttime, endtime")
	)
);
?>