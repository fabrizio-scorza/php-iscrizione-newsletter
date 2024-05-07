<?php
function register($email)
{
    if ($email == !null) {
        if (str_contains($email, '@') && str_contains($email, '.')) {
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
}
