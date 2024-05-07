<?php
// accedo alla sessione e recupero la variabile salvata
session_start();

$is_correct = $_SESSION['validate_sub'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark d-flex flex-column vh-100">
    <?php
    include __DIR__ . '/partials/template/header.php';
    ?>
    <main class="flex-grow-1">
        <div class="container">
            <?php
            if ($is_correct != '') {
                if ($is_correct) {
            ?>
                    <div class="alert alert-success" role="alert">
                        la tua e-mail è stata registrata con successo!!
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-warning" role="alert">
                        qualcosa è andato storto, controlla la mail inserita e invia nuovamente!!
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </main>
    <?php
    include __DIR__ . '/partials/template/footer.php';
    ?>
</body>

</html>