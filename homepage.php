<?php 
    require('conn.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenn Mujar</title>
</head>
<body>
    
    <div class="container-option">
    <li><a href="#" class="option" id="signin">Login</a></li>
    <li><a href="#" class="option" id="signup">Signup</a></li>
    </div>

    <center class="company">ABC Company</center>

    
    <div class="container">
        <div class="signin-container">
            
            <!--Sign In-->
            <form method="post" autocomplete = "off" class="signin-form">
                <a href="#" class="closex">
                <i id="user" class="fa fa-times"></i>
                </a>
                <h1 class="title">SIGN IN</h1>
                <div class="input-field">
                <i id="user" class="fa fa-user"></i>
                <input type="text" class="login-details" name="username" placeholder="Username" required="">
            </div>
            <div class="input-field">
                <i class="fa fa-lock" aria-hidden="true" id="password"></i>
                <input type="password" class="password" name="password" placeholder="Password" required="">
            
            </div>
            <a  href="#" class="forgot-password">Forgot Password?</a>
           <input type="submit" name="lgn" value="Login" class="button">
           <p>Don't have an account?<a href="#" class="account-text" id="signup-link"> Sign up</a><p>
            </form>
        </div>
        </div>
        

         <!--Signup-->
        <div class="signup-container">
            <div class="signup-items"></div>
        
            <form method = "post" autocomplete="off" class="signup-form">
                <a href="#" class="closey">
                <i id="user" class="fa fa-times"></i>
                </a>
            <h2 class="title">SIGN UP</h2>
            <div class="input-field">
                <i id=firstName></i>
                <input type="text" name="firstName" placeholder="Firstname" required="">
            </div>
            <div class="input-field">
                <i id="lastName"></i>
                <input type="text" name="lastName" placeholder="Lastname" required="">
            </div>
            <div class="input-field">
                <i id="userName" class="fa fa-user"></i>
                <input type="text"  name="username" placeholder="Username" required="">
            </div>
            <div class="input-field">
                <i id="pass" class="fa fa-lock"></i>
                <input type="password"  name="password" placeholder="Password" required="">
            </div>
            <input type="submit" name="btn" value="Sign up" class="button">

            <p>Already have an account? <a href="#" class="account-text"id="signin-link">Sign in</a></p>
            </form>
    </div>
    </div>
        </div>
    </div>
    <script src="functions.js"></script>
    
   		<!--INSERT DATABASE REGISTER CREDENTIALS-->
    <?php 
       #INSERT REGISTER CREDENTIALS INTO DATABASE
        if(isset($_POST['btn'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql_u = "SELECT * FROM credentials WHERE username ='$username'";
            $res_u = mysqli_query($conn, $sql_u);

            if (mysqli_num_rows($res_u) > 0){
                $_SESSION['firstname'] = $firstname;
                echo "Username already exists!";
            }else{
                $query = "INSERT INTO credentials (first_name,last_name,username,password) 
                        VALUES ('$firstName', '$lastName','$username', '$password')";
                $results = mysqli_query($conn, $query);
                echo "Saved";
                exit();
            }
        }
?>

    <div class="error">
    <?php 
        #LOGIN VALIDATIONS
    	if(isset($_POST['lgn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM credentials WHERE username = '$username' && password = '$password'";

        $result = mysqli_query($conn,$query)
                or die("Couldn't execute query!");
        $row = mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result)  == 1){
            if ($password == $row['password']) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
               
            }else{
                echo "<p> style='color:red; font-size:20px;'>Invalid Password";
    }

            }else{
        echo "<p style='color:red; font-size:20px;'>Username or password is incorrect. Please try again";
    }
        }
    ?>
    </div>
    

        
     
   

 
</body>
</html>