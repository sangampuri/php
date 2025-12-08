

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <div>

    <label for="name">
        Name:
        <input type="text" name="name" placeholder="Enter name" id="name">
    </label>
    <label for="email">
        Email:
        <input type="email" name="email" placeholder="Enter email" id="email">
    </label>
    <label for="messsage-box">
        Message:
        <textarea name="message" id="message-box"
        placeholder="enter your message">
        </textarea>
    </label>
       </div>
       <button type="submit">Submit</button>
</form>