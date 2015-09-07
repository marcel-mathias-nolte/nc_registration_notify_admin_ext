<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   NC Registration Admin Notification 
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2013
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['createNewUser'][] = array('NcNotifyAdministrator', 'informAdminCreate');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array('NcNotifyAdministrator', 'informAdminActivate');
//$GLOBALS['TL_HOOKS']['closeAccount'][] = array('NcNotifyAdministrator', 'informAdminClose');