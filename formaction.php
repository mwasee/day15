<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="information";

$conn= new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$class=$_POST['class'];
$city=$_POST['city'];
$age=$_POST['age'];
$height=$_POST['height'];

$a="insert into collage (name,class,city,age,height) values('$name','$class','$city',$age,'$height')";
//$b=$conn->query($a);

if($conn->query($a))
{
echo "successfully new row inserted<br>";
}
else{
    echo "not insert failed<br>";
   // echo $conn->error;
    //echo $a;
}
?>