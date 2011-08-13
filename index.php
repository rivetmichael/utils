<?php

function generate_key($lenght) {
    $allowed = "-0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz";
    $key = "";
    for ($i = 0; $i < $lenght; $i++) {
        $key .= $allowed[rand(0, (strlen($allowed)) - 1)];
    }
    return $key;
}

$ssh_key = "";
if (is_numeric($_GET["lenght"]) && !empty ($_GET["lenght"])) {
    $ssh_key = generate_key($_GET["lenght"]);
} else {
    $ssh_key = "impossible de générer une clé.";
}



?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <meta charset="utf-8" />
        <title>Utils 0.1</title>
        <link rel="stylesheet" href="style.css" type="text/css" /> 

    </head>
    <body>
        <form method="get" action=".">
            <ul>
                <li>
                    <label for="input_id">Longueur : </label>
                    <input class="input_text" id="input_id" type="text" name="lenght" value="<?php if(isset($_GET["length"])){echo $_GET["length"];} ?>" maxlength="4" />
                </li>
                <li><input type="submit" value="envoyer" /></li>
            </ul>
        </form>
        <p>
            <?php echo $ssh_key; ?>
        <p>
    </body>
</html>

