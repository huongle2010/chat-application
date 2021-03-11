<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
<?php require './config/traitement.php' ?>
    <h1>Welcome to Mychat</h1>
    <div id="container">
        <div id="chatbox">
            <div id="chatdata">
            <span style="color:green;"><?php echo $allMessage['name']; ?> : </span> 
            <span style="color:brown;"><?php echo $allMessage['message']; ?></span>
            </div>
        </div>
    </div>
    <form action="" class="login-form" method="POST">
        <?php
            if($error){
                echo $error;
            }
        ?>
        <input type="text" name ="name", placeholder="Enter Name">
        <textarea name="message" placeholder="Enter Message"></textarea>
        <input type="submit" name="submit" value="Send!">
    </form>

</body>
</html>