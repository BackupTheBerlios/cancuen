<?php
$smartystatics = new Smarty;
$smartystatics->compile_dir = './templates_c';
$smartystatics->template_dir = './templates';
$smartystatics->config_dir = './configs';
$smartystatics->cache_dir = './cache';

 unset($visited);
 session_start();
 $statics = new counter();
 $conn = $statics -> connect();
 $visitstoday = $statics->visitstoday();
 $visitstotal = $statics->visitstotal();
 $statics->increment();
 $statics -> disconnect($conn);
 session_register("visited");
 $visited=1;

$smartystatics->assign("VTODAY",$visitstoday);
$smartystatics->display("statics.tpl");
?>
