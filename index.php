<?php 
// Session => Allow you save the user data in the server for use on many page on the same website. 
// $_SESSION => It is superglobal variable that store the session data.
// var_dump => Function that shows information of a variable such as the data type, value and it's size.

session_start();  // Activate session to start using them.

$_SESSION["username"] = "David Alejandro Guerrero Amador";
$_SESSION["age"] = 23;
$_SESSION["city"] = "Chiquinquirá"; 

// session_destroy(); // Delete all session information.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sessions in PHP</title>
</head>
<body>
    <main class="main_container">
        <div class="container">
            <h2>Session content</h2>
            <div class='gray_text'>
                <?php echo "<p>" . var_dump($_SESSION) . "</p>"; ?>
            </div>
        </div>
        <div class="container">
            <h2>Username</h2>
            <div class='gray_text'>
                <?php echo "<p>" . $_SESSION["username"] . "</p>"; ?>
            </div>
        </div>
    </main>
</body>
</html>