<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Halaman Administrator</title>
        <style type="text/css">
            .inner {
                margin: 200px auto;
                padding: 20px;
                width: 240px;
                border: 1px solid #333;
            }
        </style>
    </head>
    <body>
        <?php
        ini_set('display_errors', 1);
        define('_VALID', 1);
        require_once('./auth.php');

        //cek apakah sudah login
        init_login();
        validate();
        ?>

        <h3>Simulasi Halaman Admin</h3>
        <p>
            <a href="?m=logout">Logout</a>
        <p>
        Menu-menu admin ada di sini
    </body>
</html>