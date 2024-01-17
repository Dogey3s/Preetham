<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Form</title>
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

        #map {
            height: 300px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input, select {
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

        #comment-section,#register {
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

        .but{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <div id="navbar">
        <h1>Indian Event Planner</h1>
    </div>
    <form action="college.php" method="post">
        <div id="event-form">
            <h1>Event Details</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Your Name" name="Name">

            <label for="date">Date of Event:</label>
            <input type="date" id="date" name="doe">

            <label for="location">Event Location:</label>
            <input type="text" id="location" placeholder="Event Location" name="eventlocation">

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" placeholder="Number of Guests" name="numGuests">

            <label for="stagedecoration">Stage Decoration:</label>
                <select id="Stage" name="StageType">
                    <option value="Traditonal">Tradition Stage</option>
                    <option value="Thematic">Thematic/Decorative Stage</option>
                    <option value="Circular">In-The-Round/Circular Stage</option>
                </select>

            <label for="arr-deco">Arrangement & Decoration:</label>
                <select id="arrdeco" name="arrdeco">
                    <option value="Royal">Royal</option>
                    <option value="Premium">Premium</option>
                    <option value="Classic">Classic</option>
                </select>

            <label for="food">Food Type:</label>
                <select id="food" name="foodType">
                    <option value="north">North Indian</option>
                    <option value="south">South Indian</option>
                </select>

            <button style="padding-bottom: 20px;" type="button" onclick="estimateCost()">Estimate Cost</button> <br> <br>

            <button type="button" onclick="showCommentSection()">Comment</button>

             <div id="comment-section">
                <label for="comment">Comment:</label>
                <textarea id="comment" placeholder="Your Comment" name="commentSection"></textarea>
                <button type="button" onclick="submitComment()">Post</button>
            </div>  <br> <br> 

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
            alert("Thank you "+name+" for registering with us!!!");
        }
    </script>

<script>
    function estimateCost() {
        var foodType = document.getElementById('food').value;
        var stageType = document.getElementById('Stage').value;
        var arrangeType = document.getElementById('arrdeco').value;
        var numofguests = document.getElementById('guests').value;

        var foodCosts = {
            'north': 150,
            'south': 140,
        };

        var stagecosts = {
            'Traditonal': 300,
            'Thematic': 600,
            'Circular': 750,
        };

        var arrangecosts = {
            'Royal': 500,
            'Premium': 600,
            'Classic': 400,
        }

        
        var foodCost = foodCosts[foodType];
        var stageCost = stagecosts[stageType];
        var arrangeCost = arrangecosts[arrangeType];

        
        if (foodCost !== undefined && stageCost !== undefined && arrangeCost !== undefined) {
           
            var totalCost = foodCost * numofguests + stageCost + arrangeCost;

        
            alert('Estimated Cost of Your Event: $' + totalCost);
        } else {
            alert('Invalid options selected. Please check your choices.');
        }
    }
</script>

    
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
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
    $numGuests = $_POST["numGuests"];
    $stagedeco = $_POST["StageType"];
    $arrdeco = $_POST["arrdeco"];
    $foodType = $_POST["foodType"];
    $comment = $_POST["commentSection"];

    // SQL query to insert the form data into the 'user_req' table
    $sql = "INSERT INTO college_events (name, event_date, event_location, num_guests, stage_deco, arr_deco, food_type, comment) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssissss", $userName, $eventDate, $eventLocation, $numGuests, $stagedeco, $arrdeco, $foodType, $comment);
    $stmt->execute();
    $stmt->close();

    echo "Form data successfully stored in the database.";
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>
