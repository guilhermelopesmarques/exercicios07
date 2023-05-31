<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios07</title>
</head>
<body>
    <form method="POST">
    <input type="number" name="numero">
    <button type="submit" name="verificar">Verificar</button>

    </form>
    <?php


if (isset($_POST['verificar'])){

$numero = $_POST["numero"];

if ($numero % 3 == 0) {
    echo " é divisível por 3";
}
elseif ($numero % 5 == 0) {
    echo " é divisível por 5";
}
else{
    echo " não é divisível por 3 e nem divisivel por 5";
}

}
    ?>
</body>
</html>