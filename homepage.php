<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikand Loss Management Product Tracking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #40E0D0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .stars {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .stars input {
            display: none;
        }

        .stars label {
            font-size: 20px;
            color: #ccc;
            padding: 0 5px;
            cursor: pointer;
        }

        .stars input:checked ~ label,
        .stars input:checked ~ label ~ label {
            color: gold;
        }

        .buttons {
            text-align: center;
        }

        .buttons button {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons button:hover {
            background-color: #0056b3;
        }

        .textarea {
            height: 80px;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <a href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="#information">Information</a>
</nav>

<div class="container">
    <h1>Trikand Loss Management Product Tracking</h1>

    <form action="submit.php" method="POST">
        <label for="product-desc">Product Description:</label>
        <input type="text" id="product-desc" name="product-desc" required>

        <label for="product-code">Product Code:</label>
        <input type="text" id="product-code" name="product-code" required>

        <label for="customer-name">Customer Name:</label>
        <input type="text" id="customer-name" name="customer-name" required>

        <label for="customer-mobile">Customer Mobile Number:</label>
        <input type="text" id="customer-mobile" name="customer-mobile" required>

        <label for="customer-feedback">Customer Feedback:</label>
        <textarea id="customer-feedback" name="customer-feedback" class="textarea"></textarea>

        <label>Customer Rating:</label>
        <div class="stars">
            <input type="radio" name="star" id="star1" value="1">
            <label for="star1">&#9733;</label>
            <input type="radio" name="star" id="star2" value="2">
            <label for="star2">&#9733;</label>
            <input type="radio" name="star" id="star3" value="3">
            <label for="star3">&#9733;</label>
            <input type="radio" name="star" id="star4" value="4">
            <label for="star4">&#9733;</label>
            <input type="radio" name="star" id="star5" value="5">
            <label for="star5">&#9733;</label>
        </div>

        <label for="departure-time">Departure Time:</label>
        <input type="time" id="departure-time" name="departure-time">

        <label for="arrival-time">Arrival Time:</label>
        <input type="time" id="arrival-time" name="arrival-time">

        <label for="location">Location:</label>
        <input type="text" id="location" name="location">

        <label for="route">Route:</label>
        <input type="text" id="route" name="route">

        <label for="transit-person">Person on Transit:</label>
        <input type="text" id="transit-person" name="transit-person">

        <label for="vehicle-number">Vehicle Number:</label>
        <input type="text" id="vehicle-number" name="vehicle-number">

        <label for="category">Category of the Product:</label>
        <input type="text" id="category" name="category">

        <label for="product-collected">Product Collected (Yes/No):</label>
        <input type="text" id="product-collected" name="product-collected">

        <label for="company-remarks">Company Remarks:</label>
        <textarea id="company-remarks" name="company-remarks" class="textarea"></textarea>

        <div class="buttons">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
</body>
</html>