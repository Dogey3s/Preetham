<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/d1a95959ba.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cedarville+Cursive&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./static/style.css">
       <style>
           body {
            background-color: #f8f9fa; /* Change to your desired background color */
            background-image: url('./Assets/registrationbg.png');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
            }
            .can{
                padding-left: 500px;

            }
            .left-text{
                color: red;
                font-family: 'Cedarville Cursive', cursive, 'Helvetica', sans-serif;
                font-size: 2rem;
            }
            .reg-form{
                background-color: #F1EFEF; /* Change to your desired form background color */
                padding: 20px;
                border-radius: 8px;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                width: 300px; /* Adjust the width as needed */
            }
            .align{
                padding-left: 100px;
            }

            
       </style>
    </head>
    <body>
            <?php
            if(isset($_POST["submit"])){
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $Password = $_POST["Password"];
                $Confirm_Password = $_POST["Confirm_Password"];

                $password_hash = password_hash($Password, PASSWORD_DEFAULT);

                $errors = array();

                if (empty($fullname) OR empty($email) or empty($Password) or empty($Confirm_Password)){
                    array_push($errors,"All fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($errors,"Email is not valid");
                }
                if(strlen($Password)<8){
                    array_push($errors, "Password must be atleast 8 letters long");
                }
                if($Password!==$Confirm_Password){
                    array_push($errors, "Passwords does not match");
                }
                require_once "database.php";

                $sql = "SELECT * from users WHERE email = '$email'";

                $result = mysqli_query($conn,$sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount>0){
                    array_push($errors,"Email already exists");
                }
                
                if(count($errors)>0){
                    foreach ($errors as  $errors) {
                        echo "<div class='alert alert-danger'>$errors</div>";
                    }
                }
                else{
                    $sql = "INSERT into users (full_name,email,Password) VALUES (?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($prepareStmt){
                        mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password_hash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class= 'alert alert-success'>You are registered succesfully.</div>";
                    }
                    else{
                        die("Something went wrong");
                    }
                }
            }
            ?>
    <div class="container">
        <div class="left-text">
            <h2 >Welcome to Our Website</h2>
            <p>Explore amazing features and content.</p>
        </div>
    <div class="can">
        <div class="container" class="h-100 d-flex align-items-center justify-content-center">
            <div class="reg-form">
            <form action="registration.php" method="post">
            <div class="form-group" >
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Confirm_Password" placeholder="Confirm Password:">
            </div>
            <div class="d-grid gap-2 d-md-flex" id="align">
                <button class="btn btn-primary" type="submit" value="Register" name="submit">Register</button>
                <div class="align">
                    <button class="btn btn-primary" type="button" onClick="myFunction()" value="login" >Login</button>
                </div>
            </div>
            </form>
            </div>
        </div> 
    </div>
    </div>
       
            <script>
                 function myFunction() {
                    window.location.href = "./login.php";
                }
            </script>
    </body>
</html>
