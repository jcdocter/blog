<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-12-2016
 * Time: 16:21
 */
//vind de session.
session_start();

//welkom de klant.
print "hallo" . $_SESSION['klant'] . "welkom bij mijn applicatie";
//..........

//session variables bijhouden.
$_SESSION['counter']++;
//........
?>
<html lang="nl">
<head>
    <title>welkom op de blog</title>
    <style>
        body{
            background-color: purple;
        }
        .link{
            color: red;
        }

    </style>
</head>
<body>
<h3>welkom</h3>
<form name="klantgegevens" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table border=1>
        <p>kies uit de volgende keuze:</p><br>
        <a class="link" href="http://localhost/_2016/blogpost.php">blog posten</a><br>
        <a class="link" href="http://localhost/_2016/uitloggen.php">uitloggen</a>





