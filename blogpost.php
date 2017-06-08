<html lang="nl">
<head>
    <title>blog</title>
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
<h3>Blog</h3>
<form name="klantgegevens" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>hier beneden kunt u schrijven over dingen die gedeelt wordt met mensen die geïnterseerd zijn in uw verhaal.</p>
    <table border=1>
<tr>
        <td>
            <textarea cols="40"  rows="500" name="commentaar">
                </textarea>
            <input class="submit" type="image" name="verstuur" border=0 value="verstuur" /><br> <hr />
        </td>
        </tr>
    </table>


    <?php

    $myfile = fopen("blogpost.txt", "ab");
    if(isset($_POST['verstuur'])){
        fputs($myfile, $_POST['commentaar']);
        //echo $_POST['commentaar'];
        // print fgets("blogpost.txt");
    }
    fclose($myfile);

    //   ©tjeerd
    //ga naar uitloggen script
    echo "<a class='link' href='uitloggen.php'>loguit</a>";
    ?>
