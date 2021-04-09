<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //extract the variable from form url

    include '_dbconnect.php';


    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $description=$_POST['description'];
    $profile_photo=$_POST['profile_photo'];


    //perform sql query brother
    $sql="INSERT INTO `mydemo` (`fullname`, `email`, `designation`, `description`, `profile_photo`) VALUES ( '$fullname', ' $email', '$designation', '$description','$profile_photo')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"data saves successfully";
    }
    else{
        echo"error";
    }
}

