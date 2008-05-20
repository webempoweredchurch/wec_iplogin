<?php
/***************************************************************
* Copyright notice
*
* (c) 2005-2008 Christian Technology Ministries International Inc.
* All rights reserved
*
* This file is part of the Web-Empowered Church (WEC)
* (http://WebEmpoweredChurch.org) ministry of Christian Technology Ministries 
* International (http://CTMIinc.org). The WEC is developing TYPO3-based
* (http://typo3.org) free software for churches around the world. Our desire
* is to use the Internet to help offer new life through Jesus Christ. Please
* see http://WebEmpoweredChurch.org/Jesus.
*
* You can redistribute this file and/or modify it under the terms of the
* GNU General Public License as published by the Free Software Foundation;
* either version 2 of the License, or (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This file is distributed in the hope that it will be useful for ministry,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the file!
***************************************************************/

class tx_weciplogin_hooks {

	function login(&$pObj, &$param) {
		
		// get where clause
		$where = 'disabled = 0 AND deleted=0 AND (('.time().' > starttime AND '.time().' < endtime) OR (starttime = 0 AND endtime = 0) OR (starttime = 0 AND '.time().' < endtime) OR ('.time().' > starttime AND endtime = 0))';
		
		// get all account records from the db
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('*', 'tx_weciplogin_accounts', $where);
		
		// loop through results
		foreach( $res as $account ) {
			
			// explode the fe user groups into an array and iterate over them
			foreach( explode(',', $account['feusergroup']) as $groupid ) {
				// add masks to typo3 conf vars
				$GLOBALS['TYPO3_CONF_VARS']['FE']['IPmaskMountGroups'][] = array($account['ip'], $groupid);
			}
		}
	}
}
?>