<?php
session_start();

$_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
// untuk memasukan token
?>
    <html>
        <body>
            <form action="csrf1.php" method="post">
            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']?>" />
            <input type="text" name="data" />
            <input type="submit" name="sub" value="Done" />
            </form>
        </body>
    </html>