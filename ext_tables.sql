#
# Table structure for table 'tx_weciplogin_accounts'
#
CREATE TABLE tx_weciplogin_accounts (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	disabled tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	name tinytext NOT NULL,
	ip tinytext NOT NULL,
	feusergroup blob NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);