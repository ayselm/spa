<?php
function checkPassword($db, $log, $pass) :bool {
    $query ="SELECT pass FROM users WHERE login='$log'";
    $result = mysqli_query($db, $query);
    $res = mysqli_fetch_assoc($result);
    if ($res["pass"] !== $pass){ 
        return false;
    }
    else { return true; }
}

function aa() {}