<?php
require_once 'db_connect.php';
require_once 'lib.php';
require 'parts/head.php';
?>

    <?php
    if (!empty($_POST)) {
        $pass= md5($_POST["password"]);
        if (checkPassword($db, $_POST["login"], $pass)){ 
            echo "pass ok!";
            setcookie('login', $_POST["login"], 0, '/');
           //header('Location: main.php');
            
        }
        else {
           echo "pass owroing";
        }
    }
    ?> 
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


        


    </section>
<?php
require 'parts/end.php';
?>
