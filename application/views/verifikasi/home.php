<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        Selamat datang <?php echo $nama;?>
        <?php 
            if ($active)
                echo "Akun anda telah aktif";
            else
                echo "Akun belum aktif, silahkan cek email : <b>$email</b>";
        ?>
        <a href="<?php site_url() ?>login/logout">Logout</a>
    </body>
</html>