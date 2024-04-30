<?php
//intval = conversão de string para int 
//is_int = checando se é numero inteiro 
function calcularnumero($numero)
{
    if (is_int($numero) == true) {
        $cont = 0;
        do {

            $resultado = $numero * $cont;
            echo "<tr>" . "<td>" . $numero . "X" . $cont . "=" . $resultado . "</td>" . "</tr>";
            $cont++;

        } while ($cont <= 10);

    } else {
        echo "Error tum! tum! tum!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/tabuadastyle.css">
    <title>TABUADAAAA!!!</title>
   
</head>

<body>
    <h1>TABUADAAAA!!!</h1>
    <table>
    <?php
    $numero = intval($_POST["numero"]);
    calcularnumero($numero);
    ?>
    </table>
</body>

</html>