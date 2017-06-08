<html lang="nl">
<head>
    <title>log in blog</title>
</head>
<body>
<h3>hier inloggen om blog te openen</h3>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
            <label for=achternaam>Achternaam </label>
            <input id=achternaam maxlength=90 name=achternaam size=30 type=text required>
            </br>

            <label for=voornaam>Voornaam</label>
            <input id=voornaam name=voornaam type=text required><br />

            <label for=adres>Adres </label>
            <input id=adres maxlength=90 name=adres size=30 type=text required>
            </br>

            <label for=postcode>Postcode</label>
            <input id=postcode name=postcode type=text required><br />

            <label for=plaats>Plaats </label>
            <input id=plaats maxlength=90 name=plaats size=30 type=text required>
            </br>

            <label for=email>Email Adres</label>
            <input id=email name=email type=text required><br />

            <label for=naam>Gebruikersnaam </label>
            <input id=naam maxlength=90 name=naam size=30 type=text required>
            </br>

            <label for=wachtwoord>Wachtwoord</label>
            <input id=wachtwoord name=wachtwoord type=password required><br />

        <tr> <input class="submit" type="image" name="aanmelden" src="aanmelden-11[1].png" border=0 value="inloggen" /><br> <hr /> </tr>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-1-2017
 * Time: 09:32
 */
// var_dump($_POST);

if(isset($_POST['aanmelden'])) {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    // lees accounts.txt en controleer naam/wachtwooord
    // indien fout dan invoeren , zie hieronder

    $bestaat = false;

    // checken
    $myfile = fopen("account.txt", "r");
    while ( $rij = fgetcsv($myfile,100, "\t", "\n")) {

        if ($rij[5] == $naam && $rij[6] == $wachtwoord) {
            $bestaat = true;
            echo "Account bestaat al <br>";
        }
    }
    fclose($myfile);


    if ($bestaat == false) {
        $myfile = fopen("account.txt", "ab");
        fputs($myfile, $_POST['achternaam'] . $_POST['voornaam'] . "\t" .
            $_POST["adres"] . "\t" .
            $_POST["postcode"] . "\t" .
            $_POST["plaats"] . "\t" .
            $_POST["email"] . "\t" .
            $_POST["naam"] . "\t" .
            $_POST["wachtwoord"] . "\n");

        fclose($myfile);
        header('location: inloggen.php');
    }






}
?>



