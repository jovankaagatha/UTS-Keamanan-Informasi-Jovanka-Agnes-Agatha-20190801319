<?php
//untuk menampilkan hasil dari password yang sudah di hash
$options = [
    'cost' => 10,
];
echo password_hash("jovanka", PASSWORD_DEFAULT, $options);
?>