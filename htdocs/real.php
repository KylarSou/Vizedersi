<?php

include 'config.php';

if (isset($_POST['post_comment'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO demo (name, message)
    VALUES ('$name', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="real.css">
</head>

<body>
    <div class="supbox"></div>
    <div class="container">

        <div class="background-image"></div>
        <div class="content">
            <div class="navbar">
                <img src="images/bookk.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="stolen.php">Home</a></li>
                        <li><a href="">Region</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon">
            </div>
            <div class="top-line"></div>
            <div class="row">
                <div class="col">
                    <div class="card card1">
                        <h5>Spiderman</h5>
                        <p></p>
                    </div>
                </div>
            </div>


            <div class="content">
                <h1>Spider-Man: into the spiderverse</h1>
                <pre>Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence.
                 When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.</pre>
                <pre>sadsda
                

            </pre>
            </div>
        </div>
        <div class="wrapper">
            <form action="" method="post" class="form">
                <input type="text" class="name" name="name" placeholder="Name">
                <br>
                <textarea name="message" id="" cols="30" rows="10" class="message" placeholder="Message"></textarea>
                <br>
                <button type="submit" class="btn" name="post_comment">Post Comment</button>
            </form>
        </div>

        <div class="content1">
            <?php

            $sql = "SELECT * FROM demo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

            ?>
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['message']; ?></p>

            <?php }
            } ?>

        </div>

</body>

</html>