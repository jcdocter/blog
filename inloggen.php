<html lang="nl">
<head>
    <title>log in blog</title>
    <style>
        .submit {
            width: 200px;
            height: 70px;
        }
        body{
            background-color: purple;
        }
        .link{
            hover: red;
        }
    </style>
</head>
<body>
<h3>hier inloggen om blog te openen</h3>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<tr>
        <label for=naam>Gebruikersnaam </label>
        <input id=naam maxlength=90 name=naam size=30 type=text required>
        </br>
        <label for=wachtwoord>Wachtwoord</label>
        <input id=wachtwoord name=wachtwoord type=password required><br />
    </tr>
<tr>
        <input class="submit" type="image" name="inloggen" src="inloggen-300x150.png" border=0 value="inloggen" /><br> <hr />
</tr>

        <tr>welkom <br /></tr>
       door<a class="link" href="http://localhost/_2016/aanmelden.php">hier</a>te klikken kunt u zich aanmelden



<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-12-2016
 * Time: 16:13
*/

$myfile = fopen("account.txt", "r");
if(isset($_POST['inloggen'])) {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    // lees accounts.txt en controleer naam/wachtwooord
    // indien fout dan invoeren , zie hieronder
    $toegang = false;
    while (!feof($myfile) && $toegang == false) {
        $rij = fgetcsv($myfile, 1000, "\t", "\n");
        $accountnaam = $rij[5];
        $accountwachtwoord = $rij[6];
        // $nm = $rij[5]
        /*
        fputs($myfile, "naam=" . $_POST['naam']);
        fputs($myfile, "wachtwoord=" . $_POST['wachtwoord']);
    */

        if ($accountnaam == $naam and $accountwachtwoord == $wachtwoord) {
            $toegang = true;

        }
    }
    fclose($myfile);
    if ($toegang == true) {
        include("setup.php");

    }else{
        echo "<br>" . "onbekend. deze gebruikersnaam en/of wachtwoord klopt niet,  meld je aan !!! ";
    }
}