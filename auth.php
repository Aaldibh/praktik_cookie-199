<?php
// ini_set('display_errors', 1);
session_start(); // Memulai sesi

defined('_VALID') or die('not allowed');

function init_login() {
    // Simulasi data account nama dan password
    $nama = 'admin';
    $pass = 'admin';

    if (isset($_POST['nama']) && isset($_POST['pass'])) {
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if ($n === $nama && $p === $pass) {
            $_SESSION['nlogin'] = $n; // Set session 'nlogin'
            $_SESSION['time'] = time(); // Set session 'time'
            header('Location: ./'); // Redirect ke halaman admin setelah login berhasil
            exit();

        } else {
            echo 'Nama/Password Tidak Sesuai';
            return false;
        }
    }
}
function validate() {
    if (!isset($_SESSION['nlogin']) || !isset($_SESSION['time']) ) { // Jika sesi tidak diset 
        ?>
        <div class="inner">
            <form action="" method="post">
                <table border=0 cellpadding=5>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" /></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" /></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="LOGIN" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        exit;
    }

    if (isset($_GET['m']) && $_GET['m'] == 'logout') {
        // Hapus sesi
        session_unset();
        session_destroy();
        header('Location: ./');
        exit();

        // // Hapus cookie
        // if (isset($_COOKIE['nlogin'])) {                    
        //     setcookie('nlogin', '', time() - 3 * 3600);
        // }

        // if (isset($_COOKIE['time'])) {
        //     setcookie('time', '', time() - 3 * 3600);
        // }       
    }        
}
?>
