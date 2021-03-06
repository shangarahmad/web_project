<?php
include('connection.php');

if(isset($_POST['btn-create'])){
    
    $FullName = $_POST['full_name'];
    $Phone_number = $_POST['phone_number'];
    $City = $_POST['City'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Major = $_POST['Major'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $Word = $_POST['word'];
    $Power = $_POST['power'];
    $Excel = $_POST['excel'];
    $English = $_POST['English'];
    $Arabic = $_POST['Arabic'];
    $Persion = $_POST['Persion'];
    $Turkish = $_POST['Turkish'];
    
    
    $sql = "INSERT INTO table_Job (FName,P_number,City,Email,Gender,Major,Education,Experience,Word,Power,Excel,English,Arabic,Persion,Turkish)
            VALUES ('$FullName','$Phone_number','$City','$Email','$Gender','$Major','$education','$experience','$Word','$Power','$Excel','$English','$Arabic','$Persion','$Turkish')";

    if ($conn->query($sql) === true) {
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
} else {
     header('location: index.php');
}
?>