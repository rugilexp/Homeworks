    <?php
        if(isset($_POST['submit']) && $_POST['vardas'] && $_POST['pavarde']) {
        echo $_POST['vardas'] . ' ' . $_POST['pavarde'];
        exit();
       }
    ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VardasPavarde | PHP 12</title>
</head>
<body>
    <?php
        $submitClicked = false;
        if($submitClicked == false)
        { ?>
        <form action="<?php $_PHP_SELF; ?>" method="post">
        Jūsų vardas: <input type="text" name="vardas" />
        Jūsų pavardė: <input type="text" name="pavarde" />
        <input type="submit" name="submit" value="Pateikti" />
        </form>
    <?php
        };
    ?>
</body>
</html>
