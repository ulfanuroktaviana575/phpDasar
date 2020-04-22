<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .kotak {
            height: 200px;
            width: 300px;
            color: black;
            background-color: white;
            border-left: 3px white;
            transition: 1s;

        }

        .kotak:hover {
            color: white;
            background-color: black;
            transform: rotate(360deg);
            border-radius: 90px;
        }

        .body {

            background-image: url("kelinciku.jpg");

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .bulat {
            float: left;
        }

        .bulat_kanan {
            float: right;
        }

        .judul {
            font-size: 50px;
            text-shadow: 4px 4px 5px white;
        }
    </style>
</head>

<body class="body">
    <p>halooo</p>

    <center>

        <?php
        $username = "";
        $nim = "";
        $email = "";

        var_dump($_SERVER);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $nim = $_POST["nim"];
            $email = $_POST["nim"];
        }
        ?>


        <h1 class="judul">Halaman Login </h1>

        <div class="bulat">
            <br>

            <?php for ($i = 0; $i <= 8; $i++) : ?>

                <div class="w3-container">
                    <p><i class="fa fa-spinner w3-spin" style="font-size:64px"></i></p>
                </div>
                <?php $i++ ?>
            <?php endfor; ?>
        </div>


        <div class="bulat_kanan">
            <br>

            <?php for ($i = 0; $i <= 8; $i++) : ?>
                <div class="w3-container">
                    <p><i class="fa fa-spinner w3-spin" style="font-size:64px"></i></p>
                </div>
                <?php $i++ ?>
            <?php endfor; ?>
        </div>


        <hr>
        <hr>
        <br>

        <ul>

            <form action="form.php " method="post">

                <li>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" value="<?php echo $username ?>">
                    <br><br>
                </li>
                <li>
                    <label for="nim">NIM: </label>
                    <input type="text" name="nim" id="nim" value="<?php echo $nim ?>">
                    <br><br>

                </li>

                <li>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>">
                    <br><br><br>
                </li>
                <li>
                    <button type="submit" name="submit">Login</button>
                </li>
            </form>



            <?php if (isset($_POST["submit"])) : ?>

                <br><br>
                <div class="kotak">
                    <br>
                    <p>username :<?php echo $_POST["username"]; ?></p>
                    <p>password :<?php echo $_POST["nim"]; ?></p>
                    <p>email :<?php echo $_POST["email"]; ?></p>
                </div>
            <?php endif; ?>


        </ul>

    </center>
</body>

</html>