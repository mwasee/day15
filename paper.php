<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="form";

$conn= new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$company=$_POST['companyname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$country=$_POST['country'];
$comment=$_POST['comment'];

$sql="insert into whitepaper (name,company name,e-mail,phone,state,country,comment) "
        . "values('$name','$company','$email',$phone,'$state','$country','$comment')";
if($conn->query($sql))
{
echo "good=new row inserted<br>";
}
else{
    echo "not insert try again<br>";
    echo $conn->error;
    echo $sql;
}
?>

