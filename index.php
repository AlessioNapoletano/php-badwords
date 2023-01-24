<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
</head>

<body>
    <main>
        <h1>
            Form
        </h1>

        <form action="data.php" method="POST">
            <label for="paragraph"> Inserisci il paragrafo: </label>
            <input type="text" name="paragraph" id="paragraph">
            <br>
            <label for="censored">Paragrafo da censurare: </label>
            <input type="text" name="censored" id="censored">
            <button type="submit">INVIA</button>
        </form>
    </main>
</body>

</html>