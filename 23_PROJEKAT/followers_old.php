<?php
    session_start();
    if(empty($_SESSION["id"]))
    {
        header("Location: index.php");
    }
    $id = $_SESSION["id"];
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members of Social Network</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>See other members from our site</h1>
    <?php
        $q = "SELECT `u`.`id`, `u`.`username`, 
                CONCAT(`p`.`first_name`, ' ', `p`.`last_name`) AS `full_name`
                FROM `users` AS `u`
                LEFT JOIN `profiles` AS `p`
                ON `u`.`id` = `p`.`id_user`
                WHERE `u`.`id` != $id
                ORDER BY `full_name`;
            ";
        $result = $conn->query($q);
        if($result->num_rows == 0)
        {
    ?>
        <div class="error">No other users in database :(</div>
    <?php
        }
        else 
        {
            echo "<table>";
            echo "<tr><th>Name</th><th>Action</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo "<tr><td>";
                if($row["full_name"] !== NULL)
                {
                    echo $row["full_name"];
                }
                else 
                {
                    echo $row["username"];
                }
                echo "</td><td>";
                // Ovde cemo linkove za pracenje korisnika
                $friendId = $row["id"];
                echo "<a href='follow.php?friend_id=$friendId'>Follow</a>";
                echo "&nbsp;";
                echo "<a href='unfollow.php?friend_id=$friendId'>Unfollow</a>";
                echo "</td></tr>";
            }
            echo "</table>";
        }
    ?>
    Return to <a href="index.php">home page</a>.
</body>
</html>