<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sou";

    $conn = mysqli_connect($servername, $username, $password,$databasename);
    if($conn -> connect_error)
    {
       
        die($conn -> connect_error);
    }
    else
    {
        echo "MySql Connection Successful!" . '<br/>';
    }

    $query = "INSERT INTO stu1(id, fname, lname, mnum,  sem, branch, addr) VALUES('2', 'pooja', 'patel', '9975486454', '2', 'CE', 'ahmedabad')";
    $query = "INSERT INTO stu1(fname, lname, mnum,  sem, branch, addr) VALUES('dhruv', 'patel', '997536454', '5', 'IT', 'ahmedabad')";
    $query = "INSERT INTO stu1(fname, lname, mnum,  sem, branch, addr) VALUES('raam', 'patel', '9975222454', '8', 'IT', 'surat')";
 
    // $query = "INSERT INTO student2(studentid, firstname, lastname, mnumber, email_id, addr, branch,  sem, createddate, uploaddate) VALUES('1', 'rima', 'shah', '9975486000', 'rs1@gmail.com', 'gandhinagar', 'IT', '4');";

   //$query = "INSERT INTO student2(studentid, firstname, lastname, mnumber, email_id, addr, branch,  sem, createddate, uploaddate) VALUES('2', 'rakesh', 'shah', '9975254600', 'rs1354@gmail.com', 'gandhinagar', 'CIVIL', '4');";

    $query = "UPDATE stu1 SET fname='sikha' where id='1';";
    $query = "UPDATE stu1 SET sem='1' where id='6';";

    //$query = "DELETE FROM student2 "

    $result = $conn->multi_query($query);

    if($conn -> error)
    {
        echo $conn->error;
    }
    else
    {
        echo "Record Inserted successfully";
    }

   $query = "SELECT * FROM stu1";
    $result = $conn->query($query);

    if($conn -> error)
    {
        echo $conn->error;
    }
    else
    {
        echo '<br/>';
        while($row = $result->fetch_assoc())
        {
            echo '<pre/>';
            print_r($row);
            echo "HI" . $row["fname"] . "" . $row["lname"] . ',';
            echo implode('|',$row) . '<br/>';
        }
    }


?>