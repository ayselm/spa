<?php
require_once 'db_connect.php';
require_once 'lib.php';
require 'parts/head.php';

if (!empty($_POST)) {
 $log =  $_POST['login'];  
 $pass = md5($_POST['password']); 
 $birth = $_POST['birth']; 
$query ="INSERT INTO users( login, pass, bd) VALUES ('$log','$pass','$birth')";
print_r($query);
$result = mysqli_query($db, $query);
echo 'insert id: '. mysqli_insert_id($db);

}
?>

<section class="enter">
        <h2>reg</h2>
       
        <form method = "post" action=""> 
             <p>Логин</p>
             <input type="text" name="login" placeholder="login">

             <p>Пароль</p>
             <input type="password" name="password" placeholder="password">
             <input type="password" name="password2" placeholder="copy password">

             <input type="date" name="birth">

             <input type="submit" value="send">
        </form>


        


    </section>
<?php
require 'parts/end.php';
?>