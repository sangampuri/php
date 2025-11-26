<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    echo htmlspecialchars($email);
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
      method="post">
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email">
    </div>
</form>