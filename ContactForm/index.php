<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact Form</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error):?>
                <div class="alert alert-danger"><?= $error?></div>
            <?php endforeach;
            unset($_SESSION['errors']);
        }
        if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"><?= $_SESSION['success']?></div>
        <?php }
        unset($_SESSION['success']);
    ?>
    <form action="handleForm.php" method="post">
        <label >Enter Your Name:</label>
        <input type="text" name="name" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'] ; unset($_SESSION['name']) ; }?>"><br><br>
        <label >Enter Your Email:</label>
        <input type="text" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'] ; unset($_SESSION['email']) ; }?>"><br><br>
        <label >Enter Your Message:</label><br>
        <textarea name="msg" rows="10" cols="15"><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'] ; unset($_SESSION['msg']) ; }?> </textarea><br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>