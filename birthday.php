<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f9fa; /* Change to your desired background color */
        }

        #navbar {
            background-color: #4caf50;
            padding: 10px;
            text-align: center;
        }

        #navbar h1 {
            margin: 0;
            font-size: 24px;
            color: #fff;
        }

        #event-form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input, select, datalist {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #comment-section {
            display: none;
            margin-top: 20px;
        }

        textarea {
            width: calc(100% - 16px);
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        #event-form h1 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        #cake-container {
            position: relative;
            width: 200px;
            height: 300px;
            background-color: #f0e0d6; /* Default cake color */
            border-radius: 10px;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            margin: 0 auto; /* Add this line to center the cake diagram */
            animation: rotateCake 0.5s ease; /* Rotate animation */
        }

        #cake-input {
            text-align: center; /* Center the cake flavor dropdown */
        }

        /* Cake Flavor Styling */
        #cake-flavor {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        #candle {
            position: absolute;
            top: 5px;
            left: 90px;
            width: 20px;
            height: 80px;
            background-color: #edc988; /* Candle color */
            border-radius: 5px;
            z-index: 1;
        }

        #flame {
            position: absolute;
            top: 0;
            left: 50%;
            width: 10px;
            height: 20px;
            background-color: #EE9322;
            border-radius: 50% 50% 0 0;
            transform: translateX(-50%);
            animation: flicker 0.5s infinite alternate;
            z-index: 2;
        }

        @keyframes flicker {
            0% {
                opacity: 0.8;
            }
            100% {
                opacity: 1;
            }
        }

        #icing {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 20%;
            background-color: #ffe0bd; 
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            z-index: 0;
        }

        /* Flavor-specific colors */
        #cake-container.chocolate {
            background-color: #8B4513; 
        }

        #cake-container.vanilla {
            background-color: #FFE4B5; 
        }

        #cake-container.strawberry {
            background-color: #FFB6C1; 
        }

        @keyframes rotateCake {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .rotate {
        animation: rotateCake 0.5s ease;
    }
    </style>
</head>
<body>
    <div id="navbar">
        <h1>Birthday Celebration Planner</h1>
    </div>

    <form action="./birthday.php" method="post">
        <div id="event-form">
            <h1>Birthday Details</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" placeholder="Your Name">

            <label for="date">Date of Birthday:</label>
            <input type="date" id="date" name="doe">

            <label for="location">Celebration Location:</label>
            <input type="text" id="location" name="eventlocation" placeholder="Celebration Location">

            <div id="cake-input">
                <label for="cake-flavor">Choose Cake Flavor:</label>
                <select id="cake-flavor" name="cake" onchange="changeCakeFlavor(event)">
                    <option value="chocolate">Chocolate</option>
                    <option value="vanilla">Vanilla</option>
                    <option value="strawberry">Strawberry</option>
                </select>
            </div> <br>

            <div id="cake-container">
                <div id="candle">
                    <div id="flame"></div>
                </div>
                <div id="icing"></div>
            </div> <br>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="numGuests" placeholder="Number of Guests">

            <label for="dress">Dress Type:</label>
            <select id="dress" name="dressType">
                <option value="party">Party Dress</option>
                <option value="casual">Casual Dress</option>
            </select>

            <label for="food">Food Type:</label>
            <select id="food" name="foodType">
                <option value="north">North Indian</option>
                <option value="south">South Indian</option>
            </select>

            <label for="decoration">Decoration:</label>
            <select id="decoration" name="FlowerType">
                <option value="ballon">Ballon</option>
                <option value="flower">Flower</option>
                <option value="balflow">Ballon with Flower</option>
            </select>

            <label for="pv">PhotoGraphy & VideoGraphy:</label>
            <select id="photovideo" name="photovideo">
                <option value="Candid">Candid Photography and Videography</option>
                <option value="Portrait">Portrait Photography and Cinematography</option>
                <option value="Documentary">Documentary Style Photography and Storytelling Videography</option>
            </select>

            <button style="padding-bottom: 20px;" type="button" onclick="estimateCost()">Estimate Cost</button> <br> <br>

            <button type="button" onclick="showCommentSection()">Comment</button>

            <div id="comment-section">
                <label for="comment">Comment:</label>
                <textarea id="comment" placeholder="Your Comment" name="commentSection"></textarea>
                <button type="button" onclick="submitComment()">Post</button>
            </div> <br> <br>

            <button type="submit" onclick="thank()">Submit</button> <br> <br>

            <button type="button" onclick="hom()">Home</button>
        </div>
    </form>
    <script>
        var name = document.getElementById('name').value; 

        function showCommentSection() {
            document.getElementById('comment-section').style.display = 'block';
        }
        function showregister(){
            document.getElementById('register').style.display='block';
        }

        function submitComment() {
            var comment = document.getElementById('comment').value;
            alert('Comment submitted: ' + comment);
        }
        function hom(){
            window.location.href = "index1.php";
        }
        function thank(){
            alert("Thank you"+name+"for registering with us!!!");
        }
    </script>

    <script>
        function changeCakeFlavor(event) {
            var cakeContainer = document.getElementById('cake-container');
            var flame = document.getElementById('flame');
            flame.style.display = 'none';
            var flavor = event.target.value;
            cakeContainer.classList.remove('chocolate', 'vanilla', 'strawberry');
            cakeContainer.classList.add(flavor);
            cakeContainer.classList.add('rotate');
            setTimeout(function () {
                flame.style.display = 'block';
            }, 5000);
            setTimeout(function () {
                cakeContainer.classList.remove('rotate');
            }, 500);
        }
    </script>

    <script>
        function estimateCost() {
    var foodType = document.getElementById('food').value;
    var dressType = document.getElementById('dress').value;
    var photovideoType = document.getElementById('photovideo').value;
    var flowerType = document.getElementById('decoration').value;
    var numofguests = document.getElementById('guests').value;

    var foodCosts = {
        'north': 150,
        'south': 140,
    };

    var dressCosts = {
        'party': 100,
        'casual': 120
    };

    var photovideoCosts = {
        'Candid': 200,
        'Portrait': 180,
        'Documentary': 220
    };

    var flowerCosts = {
        'ballon': 80,
        'flower': 100,
        'balflow': 120
    };

    var totalCost = numofguests * foodCosts[foodType] + dressCosts[dressType] + photovideoCosts[photovideoType] + flowerCosts[flowerType];

    alert('Estimated Cost of Your Birthday Celebration: $' + totalCost);
}
</script>
    
</body>
</html>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input from the form
    $userName = $_POST["Name"];
    $eventDate = $_POST["doe"];
    $eventLocation = $_POST["eventlocation"];
    $cake = $_POST["cake"];
    $numGuests = $_POST["numGuests"];
    $foodType = $_POST["foodType"];
    $dressType = $_POST["dressType"];
    $flowerDecoration = $_POST["FlowerType"];
    $photovideo = $_POST["photovideo"];
    $comment = $_POST["commentSection"];

    // SQL query to insert the form data into the 'user_req' table
    $sql = "INSERT INTO birthday_events (name, event_date, event_location, cake, num_guests, food_type, dress_type, flower_decoration, photo_video, comment) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisssss", $userName, $eventDate, $eventLocation, $cake, $numGuests, $foodType, $dressType, $flowerDecoration, $photovideo, $comment);
    $stmt->execute();
    $stmt->close();

    echo "Form data successfully stored in the database.";
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>


