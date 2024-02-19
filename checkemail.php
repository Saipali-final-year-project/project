<?php
//require_once("database.php"); // require the db connection
$link = mysqli_connect("localhost", "root", "", "blog_db");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/* catch the post data from ajax */
$email = $_GET['email'];
$query = mysqli_query($link, "SELECT `email` FROM `tblusers` WHERE `email` = '$email'");
if (mysqli_num_rows($query) > 0) { // if return 1, email exist.
    echo 'false';
} else {
    echo 'true';
}

mysqli_close($link);
