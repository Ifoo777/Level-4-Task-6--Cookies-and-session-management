<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $_SESSION["name"] = $_POST['name'];
    $_SESSION["user_name"] = $_POST['user_name'];
    $_SESSION['birth_date'] = $_POST['birth_date'];

    echo '<h1>Data saved in Cookies </h1>';
    echo '<ul>';
    echo '<li>Name: ' . $_SESSION['name'] . '</li>';
    echo '<li>User Name: ' . $_SESSION['user_name'] . '</li>';
    echo '<li>Birth Date: ' . $_SESSION['birth_date'] . '</li>';
    echo '</ul>';

    echo '<button><a href="logout.php">Logout</a></button>';
}
// If the Session or Post is available, capture session information and display message 
else if (isset($_SESSION['name']) || isset($_POST['name'])) {

    echo '<h1>Logged in </h1>';
    echo '<ul>';
    echo '<li>Name: ' . $_SESSION['name'] . '</li>';
    echo '<li>User Name: ' . $_SESSION['user_name'] . '</li>';
    echo '<li>Birth Date: ' . $_SESSION['birth_date'] . '</li>';
    echo '</ul>';

    echo '<button><a href="logout.php">Logout</a></button>';
} 
// Else give an error message
else {
    echo '<h1>Error - No data is captured </h1>';
    echo '<button><a href="logout.php">Logout</a></button>';
}