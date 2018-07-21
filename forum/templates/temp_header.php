<?php
/**
 * Created by PhpStorm.
 * User: Tom Cedric Gottschlich
 * Date: 21.07.2018
 * Time: 19:08
 * Description: Is the template for the html header.
 */

require_once("config/config.php");

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/"><?php echo($s_site_title); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?site=temp_forum">Foren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?site=chats">Chat</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item pull-right">
                <a class="nav-link" href="?site=login">Anmelden</a>
            </li>
            <li class="nav-item pull-right">
                <a class="nav-link" href="?site=register">Registrieren</a>
            </li>
        </ul>
    </div>
</nav>

