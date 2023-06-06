<?php
if (isset($_POST['email'], $_POST['units'])) {
    $units = intval($_POST['units']);
    if ($units < 10) {
        echo "El pedido mínimo es de 10 unidades.";
    } else {
        echo "Pedido registrado";
    }
}
?>