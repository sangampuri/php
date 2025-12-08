<?php 
    $loginSuccess = false;

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'admin' && $password === '1234')
        {
            echo "Login successful!";
            $loginSuccess = true;  // mark login as success
        } 
        else {
            echo "Invalid username or password!";
        }
    }
?>

<?php if(!$loginSuccess): ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Username
        <input type="text" name="username" id="username">
    </label>
    <br><br>
    <label for="password">Password
        <input type="password" name="password" id="password">
    </label>
    <br><br>
    <button type="submit">Login</button>
</form>
<?php endif; ?>
