<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati</title>
</head>

<body>
    <main>
        <h1>
            Stampa dati:
        </h1>

        <p>
            paragrafo:
            <?php
            $paragraph = $_POST['paragraph'];
            echo $paragraph;
            ?>
        </p>

        <p>
            Lunghezza paragrafo:
            <?php
            echo strlen($paragraph);
            ?>
        </p>
    </main>
</body>

</html>