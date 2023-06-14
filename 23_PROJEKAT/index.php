<?php 
    $poruka = "";
    if (isset($_GET["p"]) && $_GET["p"] == "ok")
    {
        $poruka = "You have successfully registered, please login to continue";
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="success"> <!-- zameniti nekim elementom iz bootstrapa -->
        <?php echo $poruka; ?>
    </div>
    <!-- slider, pozadinska slika, ... -->
    <h1>Welcome to our Social Network!</h1>
    <p>New to our site? <a href="register.php">Register here</a> to access our site!</p>
    <p>Already have the account? <a href="login.php">Login here</a> to continue to our site!</p>
</body>
</html>