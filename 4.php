<?php
$nama = "";
$nim = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="tugas4.php">
        Nama : <input type="text" name="nama" value="<?php echo $nama; ?>">
        <br><br>
        Nim : <input type="text" name="nim" value="<?php echo $nim; ?>">
        <br><br>
        <input type="submit" value="Simpan" name="submit">
        <br>
        <?php
        if (isset($_POST['submit'])) {
            echo "<h2>Data Diri Anda</h2>";
            echo "<br>";
            echo "Nama : " . $nama;
            echo "<br><br>";
            echo "Nim  :" . $nim;
            echo "<br>";
        }
        ?>
</body>

</html>