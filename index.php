<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>BadWords</h1>
                <form action="./bad.php" method="get">
                    <div class="mb-3">
                        <label for="UserText" class="form-label">Type a text</label>
                        <input type="text" class="form-control" id="user-text" name="UserText" placeholder="Give papa a cup of proper coffe in a copper coffe cup">
                        <div id="emailHelp" class="form-text">We'll never share your text with anyone else.</div>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary btn-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    h1,
    .button {
        text-align: center;
    }

    .col {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>