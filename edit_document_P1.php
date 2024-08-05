<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM p1 where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	if($k == 'title')
		$k = 'ftitle';
	$$k = $v;
}
include 'new_document_P1.php';
?>