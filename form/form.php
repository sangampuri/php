<?php  

//!The following shows how to create a simple form (form.php) with an email input field:
    // if (isset($_POST['email'])){
    //    print_r($_POST['email']);
    // }

    //?Only gets value if the form method is post
    if($_SERVER['REQUEST_METHOD']==='POST'){ 
        $email = $_POST['email'];
        echo $email;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<!-- ======================================================= -->