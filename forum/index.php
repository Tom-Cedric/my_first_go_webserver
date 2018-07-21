<?php
/**
 * Created by PhpStorm.
 * User: Tom Cedric Gottschlich
 * Date: 21.07.2018
 * Time: 18:40
 */

require_once ("config/config.php");

if (isset($_GET["site"])) {

    $site = htmlspecialchars($_GET["site"]);

} else {

    $site = "index";

}

?>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="author"         content="<?php echo($s_site_author); ?>">
    <meta name="description"    content="<?php echo($s_site_description); ?>">
    <meta name="version"        content="<?php echo($s_site_version); ?>">

    <title><?php echo($s_site_title); ?></title>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- load my css file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- load bootstrap and jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <?php include("templates/temp_header.php") ?>
</header>
<main class="main-container container">
    <?php include("templates/" . $site . ".php");?>
</main>
<footer class="footer">
    <?php include("templates/temp_footer.php") ?>
</footer>
</body>
</html>
