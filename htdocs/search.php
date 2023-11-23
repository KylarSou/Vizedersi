<!-- search.php -->
<?php
session_start();

include("php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

if (isset($_GET['query'])) {
    $search_query = mysqli_real_escape_string($con, $_GET['query']);
    

    switch (strtolower($search_query)) {
        case 'spiderman':
            header("Location: real.php");
            exit;
        case 'departed':
            header("Location: real2.html");
            exit;
        case 'lost':
            header("Location: real3.html");
            exit;
        case 'gameofthrones':
            header("Location: real4.html");
            exit;
        case !empty($search_query):
            header("Location: stolen.php");
            exit;
            

        default:
            // Handle other search queries or display a message for no results
            break;
    }
}
?>
