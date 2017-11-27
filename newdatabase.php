<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="company";

$conn= new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$salary=$_POST['salary'];
$city=$_POST['city'];

$a="insert into employee (name,salary,city) values('$name',$salary,'$city')";
//$b=$conn->query($a);

if($conn->query($a))
{
echo "ok";
}
else{
    echo "not insert";
    //echo $conn->error;
   // echo $a;
}


?>