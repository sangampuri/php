<?php

// function welcome(){
//     echo 'welcome!';
// }

// welcome();

//!Parameters in function

// function welcome_user($username){
//     echo 'Welcome'." ".$username."\n";
// }

// welcome_user("Sangam");
// welcome_user("Admin");

//!Return statement

function welcome_user($username){
    return 'Welcome'." ".$username;
}

$welcome_message = welcome_user("User!");
echo $welcome_message;


