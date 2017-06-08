<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-12-2016
 * Time: 16:27
 */
//vind de session
session_start();

//eind session melden
echo "tot ziens" . $_SESSION['klant'] . "tot de volgende keer";
//.......

//verwijder de session
session_destroy();