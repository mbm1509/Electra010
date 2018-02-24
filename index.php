<?php 

include 'MySmarty.php';

$test = "Smarty Test";

$smarty = new MySmarty();

$smarty->assign('test',$test);

$smarty->display('index.tpl');




?>

