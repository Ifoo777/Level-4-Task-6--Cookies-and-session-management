<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $post_name = $_POST['name'];
    $post_userName = $_POST['user_name'];
    $post_dob = $_POST['birth_date'];

    setcookie('name' , $post_name, time() + (30 * 60 * 60 * 24) , '/');
    setcookie('user_name', $post_userName, time() + (30 * 60 * 60 * 24), '/');
    setcookie('birth_date', $post_dob, time() + (30 * 60 * 60 * 24), '/');

    
    echo '<h1>Data saved in Cookies </h1>';
    echo '<ul>';
    echo '<li>Name: ' . $post_name . '</li>';
    echo '<li>User Name: ' . $post_userName. '</li>';
    echo '<li>Birth Date: ' . $post_dob. '</li>';
    echo '</ul>';

    echo '<form action="logout.php" method="post" name="userForm"> ';
    echo '<label for="delete_cookies"> Delete All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "true"/><br />';

    echo '<label for="keep_cookies_cookies"> Keep All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "false" checked="checked"/><br /><br />';

    echo '<button type="submit">Exit</button>';
    echo '</form>';


} else if ((isset($_COOKIE['name']) && isset($_COOKIE['user_name']) && isset($_COOKIE['birth_date']))){

    //Declare variables
    $post_name = $_COOKIE['name'];
    $post_userName = $_COOKIE['user_name'];
    $post_dob = $_COOKIE['birth_date'];

    echo '<h1>Data saved in Cookies </h1>';
    echo '<ul>';
    echo '<li>Name: ' . $post_name . '</li>';
    echo '<li>User Name: ' . $post_userName. '</li>';
    echo '<li>Birth Date: ' . $post_dob. '</li>';
    echo '</ul>';

    echo '<form action="logout.php" method="post" name="userForm"> ';
    echo '<label for="delete_cookies"> Delete All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "true"/><br />';

    echo '<label for="keep_cookies_cookies"> Keep All Cookies </label>';
    echo '<input type="radio" id="delete_cookies" name="delete_cookies" value = "false" checked="checked"/><br /><br />';

    echo '<button type="submit">Exit</button>';
    echo '</form>';
}

else {
    echo '<h1>Error - Not all Cookies are Captured </h1>';
    echo '<button><a href="logout.php">Logout</a></button>';
}
