<?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);	
mysql_select_db($db);

$sql_notifValue=mysql_query("SELECT * FROM admin_notif WHERE popUpValue='1'");
while($data_notifValue=mysql_fetch_array($sql_notifValue)){
	$report_notif=$data_notifValue['popUpValue'];

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}


 $update_status1="UPDATE admin_notif SET `popUpValue`='0' WHERE popUpValue='$report_notif'";

if (mysql_query($update_status1)) {?>


     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}

}
mysql_close($conn);

 ?>