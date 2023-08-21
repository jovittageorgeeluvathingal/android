<?php
    $eno = $_REQUEST["eno"];
$con = mysqli_connect("localhost:3306","root","");
if(mysqli_connect_errno()){
echo "failed to connect to mySql :" .mysqli_connect_error();
}
mysqli_select_db($con,"empdb");
$result = mysqli_query($con ,"select *from emp where eno=$eno");
$row =mysqli_fetch_array($result);
echo json_encode($row);
?>
