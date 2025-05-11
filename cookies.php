<?php
setcookie("username", "Soham", time() + 3600, "/");

if(isset($_COOKIE["username"])) 
{
    echo "Welcome back, " . $_COOKIE["username"];
} 
else 
{
    echo "Hello";
}


//setcookie("username", "", time() - 3600, "/");
?>
