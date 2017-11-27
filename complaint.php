<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="university";

$conn=new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$problem=$_POST['problem'];
$contact=$_POST['contact'];
//$photo=$_POST['photo'];

//define directory to upload   1
$target_dir = "upload/";

//file location     2
$target_file = $target_dir . basename($_FILES['photo']['name']);

//get the extenstion of file     3
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//actual funtion to upload file
$status=move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

$q="insert into complaint (name,problem,contact,photo) values('$name','$problem',$contact,'$target_file')";
    
if($conn->query($q))
{
echo " row inserted. {$status}<br>";
}
else{
    echo "not insert.{$status}<br>";
    echo $conn->error;
    echo $q;
}
?>