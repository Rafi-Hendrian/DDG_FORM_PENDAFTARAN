<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    if (!empty($nama) && !empty($email) && !empty($password) && !empty($id)) {

        $data = $id . "," . $nama . "," . $email . "," . $password . "\n";
        file_put_contents("data_pendaftaran.txt", $data, FILE_APPEND);
        echo "Pendaftaran Berhasil!";
    } else {
        echo "Harap mengisi semua field.";
    }
} else {
    echo "Formulir tidak di-submit dengan benar.";
}
?>