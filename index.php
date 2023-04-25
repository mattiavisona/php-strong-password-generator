<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Exercise</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            background-color: beige;
        }

        .btn-primary {
            text-align: center;
            padding: 15px 25px;
        }
    </style>

    <div class="container pt-2">
        <h1>Password Generator</h1>

        <form action="index.php" method="GET">

            <div class="mb-3">
                <label for="passwordLength" class="form-label">Password Length :</label>
                <input name="passwordLength" id="passwordLength" type="number" min="4" step="1" placeholder="Length">

                <hr>

                <button type="submit" class="btn btn-primary">Start</button>
            </div>

        </form>

        <hr>

        <?php

        if ($generatedPassword != "") {

        ?>

            <h2>Password generata:</h2>
            <h3><?= $_GET['passwordLength'] ?> caratteri</h3>

            <pre class="text-danger"><?= $generatedPassword ?></pre>

        <?php

        }


        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>