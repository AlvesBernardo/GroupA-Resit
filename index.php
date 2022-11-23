<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" href="styles/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/bernardo.css">
    <title>Group A Resit</title>
</head>
<body>
<div id="content">
<header>
    <?php
    //including tha nav bar once in the index page so it stays here for the rest of the pages
    include_once "includes/navBar.html";

    ?>
</header>




<?php

// defining an empty var for including pages into index page
$page = "";

// getting the get parameter from url
if (isset($_GET['page'])) {
    $page = $_GET['page'];

}

//depending on the certain par we include a certain page
if ($page == "Home") {
    //include_once "i";
} else if ($page ==="Bernardo"){
    include_once "includes/bernardoPage.php";
} /*else if ($page ==="Iarina"){
    include_once "includes/"; 
}*/ else if ($page ==="Ada"){
    include_once "includes/adaPage.html"; 
}/* else if ($page ==="Stefan"){
    include_once "includes/";
}else {
    include_once "includes/";
}*/





?>
</div>
</body>
<footer>
    <?php
    //including the footer

   include_once "includes/footer.html";
?>
</footer>
</html>