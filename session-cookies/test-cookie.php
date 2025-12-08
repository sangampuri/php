<?php 

echo $_COOKIE["TestCookie"];

setcookie("TestCookie" , "Something from somewhere" ,time() - 3600 );