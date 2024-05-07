<?php
include __DIR__ . '/utilities.php';

$email = $_POST['email'] ?? null;

$is_correct = '';

if ($email == !null) {
    $is_correct = register($email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark d-flex flex-column vh-100">
    <?php
    include __DIR__ . '/partials/template/header.php';
    ?>
    <div class="container flex-grow-1">
        <div class="text-white my-5">
            <h2>Registrazione alla Newsletter</h2>
            <h4>inserisic i dati e invia per registrarti alla nostra newsletter</h4>
        </div>
        <form action="" method="POST" class="form-control d-flex align-items-center gap-2">
            <label for="email">Inserisci la tua e-mail: </label>
            <input type="email" name="email" id="email" placeholder="esempio@esempio.es" class="px-3 flex-grow-1">
            <input type="submit" class="btn btn-dark">
        </form>
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
    <?php
    include __DIR__ . '/partials/template/footer.php';
    ?>
</body>

</html>