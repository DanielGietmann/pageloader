<?php
require_once(getcwd() . '/functions/pageloader.class.php');
use dgpageloader\PageController;
$GLOBALS["PageController"] = new PageController();

$pc_request = $GLOBALS["PageController"]->getPageName();

/*
 * Here can you require your Header
 * require('');
*/

$GLOBALS["PageController"]->showPage($pc_request);

/*
 * Here can you require your Footer
 * require('');
*/
