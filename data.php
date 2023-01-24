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

        <div class="paragraph">
            <h3>
                Paragrafo 1
            </h3>
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
        </div>

        <div class="censored">
        <h3>
                Paragrafo 2
            </h3>
            <p>
                paragrafo:
                <?php
                $censored = $_POST['censored'];
                echo $paragraph;
                ?>
            </p>

            <p>
                Lunghezza paragrafo:
                <?php
                echo strlen($censored);
                ?>
            </p>
        </div>

        <a href="index.php">Torno alla pagina del Form</a>
    </main>
</body>

</html>