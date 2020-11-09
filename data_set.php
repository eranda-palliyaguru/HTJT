<?php
session_start();
include('connect.php');
date_default_timezone_set("Asia/Colombo");

$cus='3';
$invo="LAUGFS Gas PLC";


$result2z = $db->prepare("SELECT * FROM payment WHERE action='1' AND type='credit' ORDER BY customer_id ASC");
				$result2z->bindParam(':userid', $d2);
                $result2z->execute();
                for($i=0; $row = $result2z->fetch(); $i++){
				$sales_id=$row['sales_id'];	
				$id=$row['transaction_id'];
					
$result2z11 = $db->prepare("SELECT * FROM payment WHERE sales_id='$sales_id' ORDER by transaction_id DESC limit 0,1");	
			$result2z11->bindParam(':userid', $d2);
            $result2z11->execute();
            for($i=0; $row11 = $result2z11->fetch(); $i++){
			$date=$row11['date'];

			}
	$sql = "UPDATE payment 
        SET set_off_date=?
		WHERE transaction_id=?";
$q = $db->prepare($sql);
$q->execute(array($date,$id));
				}


?>