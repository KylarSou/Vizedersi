<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stolen.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            ?>

            
    <div class="container">
        <div class="background-image"></div>
        <div class="content">
        <div class="navbar">
            <img src="images/bookk.png" class="logo">
            <nav>
                <ul>
                    <li><a href="stolen.php">Home</a></li>
                    <li><a href="">Other</a></li>
                    <li><a href="edit.php">Change Profile</a></li>
                    <li><a href="php/logout.php"> <button class="btn">Log Out</button> </a>
                </ul>
            </nav>
            <a href="edit.php"><img src="images/menu.png" class="menu-icon"></a>
        </div>
        <div class="row">
            <div class="col">
            <div class="search-bar">
                 <form action="search.php" method="GET">
                  <input type="text" name="query" placeholder="Search movies...">
                 <button type="submit" class="buttons">Search</button>
                  </form>
            </div>
                <h1>Movies</h1>
                <p>Le amet inventore in aut mollitia quia voluptatuofficia sunt tuptatibus delectus cum libero.</p>
                
            </div>
            <div class="col">
                <a href="real.php"><div class="card card1">
                    <h5>Spiderman</h5>
                    <p></p>
                </div></a>
                <a href="real2.html"><div class="card card2">
                    <h5>The Departed</h5>
                    <p></p>
                </div></a>
                <a href="real3.html"><div class="card card3">
                    <h5>Lost</h5>
                    <p></p>
                </div></a>
                <a href="real4.html"><div class="card card4">
                    <h5>Game of Thrones</h5>
                    <p></p>
                </div></a>
                <div class="card card5">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card6">
                    <h5></h5>
                    <p> </p>
                </div>
                <div class="card card7">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card8">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card9">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card10">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card11">
                    <h5></h5>
                    <p></p>
                </div>
                <div class="card card12">
                    <h5></h5>
                    <p></p>
                </div>

            </div>
        </div>


    </div>
    
</body>
</html>