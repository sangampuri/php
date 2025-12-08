<?php 

session_start();

print_r($_SESSION);
echo "My favourite colour is " .$_SESSION['favcolour'];