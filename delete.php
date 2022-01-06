<?php
require_once('curd.php');
$user=new USER();
$user_id=$_REQUEST["user_id"];

echo $gData = $user->delete($user_id);

?>