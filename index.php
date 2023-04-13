<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    
    <title>index</title>
    
</head>
<body>
<?php include ('headerfooter.php'); ?>
    <div >
        <a id="logout_link" href="logout.php">Log Out</a>
        
    </div>    
    <div class="flex-container">
        <p id="it">
            Welcome To Your IT Support System
        </p>
        <form action="problem.php" method="POST">
            
               
            <select id="title" name="Title" >
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="fname" id="fname" value="FirstName">
            <input type="text" name="lName" id="lName" value="LastName">
            <select id="role" name="role">
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="CEO">CEO</option>
            </select>    
            <input type="submit" value="Submit">
            
        </form>
    <div>    
   



</body>
</html>