<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="d-flex flex-column" action="text_transform.php" method="GET">
                    <label class="d-flex flex-column" for="subject">
                        Inserisci la parola da censurare
                        <input type="text" name="subject" id="subject">
                    </label>
                    <label class="d-flex flex-column" for="text">
                        Inserisci il testo da modificare
                        <textarea name="text" id="text" cols="30" rows="10"></textarea>
                    </label>
                    <input type="submit" value="Invia">
                </form>
            </div>
        </div>
    </div>
</body>
</html>