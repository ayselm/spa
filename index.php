<?php
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    dfhfhfg fghjfgjhfjg

    <header>
        <p>Вы здесь в первый раз? <a href="registration.php">Создайте учетную запись</a></p>
    </header>

    <section class="enter">
        <h2>Вход</h2>
       
        <form method = "post" action=""> 
             <p>Логин</p>
             <input type="text" name="login" placeholder="login">
             <p>Электронный адрес, который вы использовали для регистрации на Skillfactory</p>

             <p>Пароль</p>
             <input type="password" name="password" placeholder="password">
             <p>Забыли пароль?</p>

             <input type="checkbox" name="remember">
             <input type="submit" value="вход">
        </form>

        <?php
    echo 'php ura!!!! <br><br>';
    if (!empty($_POST)) {
        //var_dump($_POST);
        $log = $_POST["login"];
        $query ="SELECT pass FROM users WHERE login='$log'";
        $result = mysqli_query($db, $query);
        $res = mysqli_fetch_assoc($result);
        var_dump($res);
        var_dump($_POST);
        if ($res !== $_POST["password"]){ 
            echo "pass owroing";
        }
        else {
            echo "pass ok!";
        }
        }
    ?>
        


    </section>
</body>
</html>