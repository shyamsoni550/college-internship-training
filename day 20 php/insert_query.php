<?php
$servername ="localhost";
$username = "root";
$password = "";
$database_name = "sou_practices";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if($conn->connect_error)
{
    die($conn->connect_error);
}
else
{
    echo "mysql connection successful!";
}


$query = "INSERT INTO student(email,mobile_number,fname,lname) VALUES('abc@gmail.com','8901234567','vaya','shyam')";

//$query = "INSERT INTO student(student_id,fname,lname,mobile_number,email,address,branch,semester,created_date,updated_date) VALUES('02','Nilesh','Patel','0123456','avc@gmail.com','sanand','IT','sem3',NOW(),NOW())";

$result =$conn->multi_query($query);

if($conn->error){

    echo $conn->error;

}else {
    echo 'Record inserted successfully';
}


?>