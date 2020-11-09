<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Colombo");
  


 
$id=$_GET['id'];




$result = $db->prepare("SELECT * FROM purchases_item WHERE  action='0' and invoice= :userid ");
$result->bindParam(':userid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$c=$row['qty'];
$co=$row['cord'];
	
$sql = "UPDATE products 
        SET qty=qty-?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($c,$co));
	
}
 
$action=1;



$sql = "UPDATE purchases 
        SET action=?
		WHERE in_invoice=?";
$q = $db->prepare($sql);
$q->execute(array($action,$id));

$sql = "UPDATE purchases_item 
        SET action=?
		WHERE invoice=?";
$q = $db->prepare($sql);
$q->execute(array($action,$id));


?>