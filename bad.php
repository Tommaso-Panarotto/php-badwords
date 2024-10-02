<?php
//GET text from form
$text = $_GET["UserText"];

$censored = str_ireplace(" ", "***", $text);
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badword</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>BadWords</h1>
                <ul>
                    <li>
                        <h3>Testo per intero</h3>
                        <ul>
                            <li class="d-flex gap-4 align-items-center">
                                <h4>testo:</h4><?php echo $text; ?>
                            </li>
                            <li class="d-flex gap-4 align-items-center">
                                <h4>lunghezza testo:</h4>
                                <?php
                                $string = str_ireplace(" ", "", $text);
                                echo strlen($string); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3>Testo censurato</h3>
                        <ul>
                            <li class="d-flex gap-4 align-items-center">
                                <h4>testo:</h4><?php echo $censored; ?>
                            </li>
                            <li class="d-flex gap-4 align-items-center">
                                <h4>lunghezza testo:</h4><?php echo strlen($censored); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>