<?php
$host ="us-cdbr-east-06.cleardb.net";
$username = "b7c021285b9ee5";
$password ="15bf16c9";
$dbname = "heroku_1c3d051f394d960";



//assigning users datas into variables

$lname = $_POST['lname'];
$fname= $_POST['fname'];
$sex= $_POST['sex'];
$ethnicity= $_POST['ethnicity'];
$age= $_POST['age'];
$candidates= $_POST['candidates'];

//Now, I am going to create a connection 
$conn = new mysqli($host,$username,$password,$dbname);
//Now,I have to check my connection
if ($conn->connect_error)
{
    die("Connection failed:" .$conn->connect_error);
}

    $sql = "INSERT INTO voters(lastname,firstname,sex,ethnicity,yob,candidates)
    Values('$lname', '$fname', $sex, $ethnicity, $age, $candidates)";

    $insert=mysqli_query($conn,$sql);
    
        if(!$insert) 
    {
        echo "theres a problem niggah";

    }
    else
{
    echo"data succesfully inserted";
}

?>


