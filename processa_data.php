<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos\style.css">

</head>
<body>

    <header>
        <h1>Você é:</h1>
    </header>

    <main>
         <?php
           function getSigno($dia, $mes) {
                if (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
                    return "Aquário";
                } elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
                    return "Peixes";
                } elseif (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
                    return "Áries";
                } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
                    return "Touro";
                } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
                    return "Gêmeos";
                } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
                    return "Câncer";
                } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
                    return "Leão";
                } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
                    return "Virgem";
                } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
                    return "Libra";
                } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
                    return "Escorpião";
                } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
                    return "Sagitário";
                } else {
                    return "Capricórnio";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $data = $_POST["data"];
                list($dia, $mes, $ano) = explode("-", $data);

                $signo = getSigno((int)$dia, (int)$mes);
                echo "<div class='resultado-signo'>  " . $signo . "</div>";
            }

         ?>

          <a href="javascript:history.go(-1)">Voltar para a página anterior!</a>
    </main>
   
</body>
</html>