<?php

        setcookie("nombre", "", time() - 3600, "/");
        setcookie("boleta", "", time() - 3600, "/");
        setcookie("tipo", "", time() - 3600, "/");
        
        header("Location: ./newMenu/main.php");

?>