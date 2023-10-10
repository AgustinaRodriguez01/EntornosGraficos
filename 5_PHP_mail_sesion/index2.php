<?php
    $to = $_POST["email"];
    $subject = "Consulta";
    $message = $_POST["consulta"];
    mail ($to, $subject, $message);
    ?>