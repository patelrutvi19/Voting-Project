<?php
error_reporting(0);
session_start();
include('connection.php');

$votes = $_POST['gvotes'];
$total_votes = $votes+1;

// print_r($total_votes);
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['id'];

$update_votes = mysqli_query($connect, "UPDATE `user` SET `votes`='$total_votes' WHERE `id`='$gid'");
$update_user_status = mysqli_query($connect, "UPDATE `user` SET `status`=1 WHERE `id`='$uid'");

if($update_votes and $update_user_status){
    $groups = mysqli_query($connect, "SELECT * FROM `user` WHERE `role`=2");
    $groupsdata  = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    // print_r($groupsdata);

    $_SESSION['userdata']['status']= 1;
    $_SESSION['groupsdata'] = $groupsdata;

    print_r($_SESSION['groupsdata']);
}
else{
    echo  '
    <script>
             alert("some error occoured");
             window.location.href= "../routes/dashboard.php";
             </script>
';
}
?>