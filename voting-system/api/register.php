<?php
include("connection.php");


  $name = $_POST['name'];
  $mobilenumber = $_POST['mobilenumber'];
  $email = $_POST['email']; 
  $password = $_POST['password'];
  $Cpassword= $_POST['Cpassword'];
  $address = $_POST['address'];
  $image =$_FILES['photo']['name'];
  $tmp_name = $_FILES['photo']['tmp_name'];
  $role = $_POST['role'];

if ($password == $Cpassword) {
    move_uploaded_file($tmp_name, "../uploads/$image");

    $query="INSERT INTO `user`(`name`, `mobile`, `email`, `password`, `address`, `photo`, `role`, `status`, `votes`) VALUES ('$name','$mobilenumber','$email','$password','$address','$image','$role',0,0)";

    $insert = mysqli_query($connect,$query);

    

    if ($insert) {
        echo  '
        <script>
                 alert("Register Successfully!");
                 window.location.href= "../routes/dashboard.php";
                 </script>
  ';
    } else {
        echo  '
        <script>
                 alert("same error occured!");
                 window.location.href= "../routes/register.html";
             
                 </script>
  ';
    }
} else {
    echo  '
                 <script>
                          alert("password and confirm password does not match!");
                          window.location.href= "../routes/register.html";
                          </script>
           ';
}


// $name = $_POST['name'];
// $mobilenumber = $_POST['mobilenumber'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $address = $_POST['address'];
// $Cpassword = $_POST['Cpassword']; // Make sure case matches
// $image = $_FILES['photo']['name'];
// $tmp_name = $_FILES['photo']['tmp_name'];
// $role = $_POST['role'];


?>

<html>
    <script>

    </script>
</html>