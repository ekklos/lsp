<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PEMDAS|EKKLOS</title>
</head>
<body>
    <div class="box">
    <div class="container">
    <form action="" method="POST">

        <div class="top">
            <header>Login</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" name="username" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" name="password" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <button type="submit" name="login" class="submit"id="">Login</button>
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div>
</form>

</body>
</html>

    <?php
        if (isset($_POST['login'])) {
        //jika tombol yang bername login ditekan
        $user = $_POST['username'];
        $password = $_POST['password'];
        //$user = name username
        //$password = name password

        if ($user === "properti" && $password === "properti" or $user === "admin" && $password === "admin") {
        //jika username = properti dan password = properti
            echo "<script>alert('tersambung.')</script> <meta http-equiv='refresh' content='1;url=pages/home.php'>";
        //jika benar maka akan ada notif tersambung dan user akan dikirim ke folder pages dan file home.php
        } else {
            echo "<script>alert('Gagal tersambung.')</script>";
        //jika user dan password salah maka akan ada notif gagal tersambung dan user akan tetap di halaman index


        }
    }
    ?>
