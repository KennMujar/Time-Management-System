<?php 
    session_start();
    require("conn.php");
?>
<style type="text/css">
*{
    user-select:none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    text-transform:uppercase;
    
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: linear-gradient(#343a3f, #181a1d);
} 
.logout{
    text-decoration:none;
    color:#fff;
    font-size: 20px;
    position:absolute;
    top:2%;
    right:2%;
    border: 0.2rem solid #10a5f9;
    padding: 0.4rem;
}
.logout:hover{
    box-shadow: 0 0 .2rem #fff,
              0 0 .2rem #fff,
              0 0 10rem #10a5f9,
              0 0 1rem #10a5f9,
              0 0 5rem #10a5f9,
              inset 0 0 5rem #10a5f9;
}
center{
    opacity: 70%;
    text-shadow: 10px 3px 5px #10a5f9;
    position: absolute;
    top: 5%;
    text-align:center;
    color: rgb(20, 20, 20);
    font-size:50px;
    font-style: bold;
    border: 0.2rem solid #fff;
    border-radius: 2rem;
    padding: 0.4em;
    box-shadow: 0 0 .2rem #fff,
              0 0 .2rem #fff,
              0 0 10rem #10a5f9,
              0 0 1rem #10a5f9,
              0 0 5rem #10a5f9,
              inset 0 0 5rem #10a5f9;
}
.container{
    position:fixed;
    left:5%;
    top:30%;
    border: 0.2rem solid #10a5f9;
    padding: 15%;
    color: black;
    box-shadow: 0 0 0.1rem #fff,
              0 0 0.1rem #fff,
              0 0 0.1rem #10a5f9,
              0 0 0.1rem #10a5f9,
              0 0 0.1rem #10a5f9,
              inset 0 0 0.1rem #10a5f9;
              border-radius: 20px;
    align-items: center;
    justify-content: center;
}
.container-items{
    line-height:100px;
    font-size:30px;
    position: absolute;
    top:5%;
    left:5%;
    

}
	
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dashboard-style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
   
    <center>User Profile</center>
    <a href="logout.php" class="logout">Logout</a>
    <div class="container">
        <div class="container-items">
        <form method="post" autocomplete="off">
    <?php


        $query = "SELECT * FROM credentials WHERE username = '{$_SESSION['username']}'";

        $result = mysqli_query($conn,$query)
                or die("Couldn't execute query!");
        $row = mysqli_fetch_assoc($result);
        echo "<a style='color: #10a5f9;'>Employee Number: </a>"."<b>".$row['employee_number']."</b></br>";
        echo "<a style='color: #10a5f9;'>Name: </a>"."<b>".$row['first_name']." ".$row['last_name']."</b></br>";
        echo "<a style='color: #10a5f9;'>Login Time: </a>"."<b>".date("g:i A")."</b></br>";
        echo "<a style='color: #10a5f9;'>Login Date: </a>"."<b>".date("M d Y");
    ?>
    </form>
    </div>
    </div>
</body>
</html>