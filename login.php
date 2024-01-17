<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./static/style.css">
    <title>Login Form</title>
    <style>
        body {
            background-color: #f8f9fa; /* Change to your desired background color */
            background-image: url('./Assets/loginbg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
            }
            
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .can{
            padding-left: 500px;
        }

        .left-text{
            color: #F1EFEF;
            font-family: 'Cedarville Cursive', cursive, 'Helvetica', sans-serif;
            font-size: 2rem;
        }

        .login-form {
            background-color: #F1EFEF; /* Change to your desired form background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            width: 300px; /* Adjust the width as needed */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 4px;
        }

        .form-btn {
            text-align: center;
        }

        .btn-primary {
            background-color: #ff7f00; /* Orange button color */
            border: none;
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        .btn-primary:hover {
            background-color: #e67000; /* Darker orange color on hover */
        }

        .alert {
            margin-top: 20px;
        }
       
    </style>
</head>
<body>
    <?php
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users where email= '$email'";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if ($user){
            if (password_verify($password,$user["Password"])){
                session_start();
                $_SESSION["user"] = "yes";
                header("Location:index1.php");
                die();
            }
            else{
                echo "<div class='alert alert-danger'>Password is incorrect.</div>";
            }

        }
        else{
            echo "<div class='alert alert-danger'>Email does not match </div>";
        }
    }
    ?>
     <div class="container">
        <div class="left-text">
            <h2 >Welcome to Our Website</h2>
            <p>Explore amazing features and content.</p>
        </div>
    <div class="can">
        <div class="container">
            <div class="login-form">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="email" placeholder="Enter Email:" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="text-align: center;">
                            Remember Me
                        </label>
                    </div> <br> 

                    <div class="form-btn">
                        <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>
