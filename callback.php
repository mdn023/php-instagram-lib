<?php

if(isset($_GET['hub_challenge'])) echo $_GET['hub_challenge'];
if(isset($_POST)){
	$file = file_get_contents('/tmp/updates.instagram');
	$file .= json_encode($_POST['data']);
	file_put_contents('/tmp/updates.instagram', $file);
	echo $file;
}

?>