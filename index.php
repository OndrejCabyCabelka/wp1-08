<?php

$submit = filter_input(INPUT_POST, 'submit');

if (isset($_POST['genres'])) {
    $genres = $_POST ['genres'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výběr oblíbených žánru her</title>
</head>
<body>

<?php
if(isset($submit)) {
    echo "Folmulář byl odeslán";
    var_dump($genres);
} else { ?>
    <form action="index.php" method="post">

    <h1>Výběr oblíbených žánru her</h1> 

        <laber for="arkady"> Arkádové hry </label>
            <input type="checkbox" name="genres[]" id="arkady">
    </br>
        <laber for="bojove"> Bojové hry </label>
            <input type="checkbox" name="genres[]" id="bojove">
    </br>
        <laber for="plosinove hry"> Plošinové hry </label>
            <input type="checkbox" name="genres[]" id="plosinove hry">
    </br>
        <laber for="takticke"> Taktické hry </label>
            <input type="checkbox" name="genres[]" id="takticke">
    </br>
        <laber for="simulatory">Simultory </label>
            <input type="checkbox" name="genres[]" id="simulatory">
    </br>
        <laber for="sportovní">Sportovní hry </label>
            <input type="checkbox" name="genres[]" id="sportovní">
    </br>
        <laber for="děcké">Děcké hry </label>
            <input type="checkbox" name="genres[]" id="děcké">
    </br>
        <laber for="porn">Erotické hry </label>
            <input type="checkbox" name="genres[]" id="porn">
    </br>
        <laber for="bodovatelske">Budovatelké strategie </label>
            <input type="checkbox" name="genres[]" id="dudovateke">
    </br>
        <laber for="tahove"> Tahové strategie </label>
            <input type="checkbox" name="genres[]" id="tahove">
    </br>
            <input type="submit" name="submit" value="odeslat">

    </form>
    <?php  }?>
</body>
</html>