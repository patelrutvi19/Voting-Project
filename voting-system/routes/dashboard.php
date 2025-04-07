<?php
error_reporting(0);
    session_start();
    if(!isset($_SESSION['userdata'])){
         header("location: ../");
         exit();
    }

    $userdata = $_SESSION['userdata'];
    $groupsdata =$_SESSION['groupsdata'];

    // print_r($groupsdatas);

    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color:red">not voted</b>';
    }
    else{
        $status =  '<b style="color:green"> voted</b>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online voting system - Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
  
    <div id="mainsection">
    <center>
    <div id="headerSection">
    <a href="../"><button id="backbtn">Back</button></a>
    <a href="logout.php"><button id="logoutbtn">logout</button></a>
    <!-- <button id="backbtn"> <a href="../"></a>Back</button>
    <button  id="logoutbtn"><a href="logout.php"></a>logout</button> -->
    <h1>online voting system </h1>
    <hr>
</center>
    <div id="mainpanel"> 
    <div id="profile" >
    <center><img src ="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"></center><br><br>
     <b>name:</b><?php echo $userdata['name']?></br></br>
     <b>mobile:</b><?php echo $userdata['mobile']?></br></br>
     <b>address:</b><?php echo $userdata['address']?></br></br>
     <b>status: </b><?php echo $status?></br></br>
    </div>
    <div id="Group">
        <?php
        session_start();

        // echo($_SESSION['groupsdata']);

        if($_SESSION['groupsdata']){
            for($i=0; $i<count($groupsdata); $i++){
                ?>
                <img style="float:right" src="../uploads/<?php echo $groupsdata[$i]['photo']?>" height="100" width="100">
    
                <div>
                    
                    <b>Group Name:</b><?php echo $groupsdata[$i]['name']?></br></br>
                    <b>Votes:</b><?php echo $groupsdata[$i]['votes']?></br><br>  
                    <form action="../api/vote.php" method="POST">
                        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                        <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                        <input type="submit" name="votebtn" value="vote" id="votebtn">
                    </form>
                </div>
                <hr>
                <?php
            }
        }
        else{
                echo "no record";
        }
        ?>
    </div>
   </div>
</div>
    </div>

</body>


</html>

<?php  

?>

<!-- style="color: white;" -->

