<?php
 $saluto = 'patrick come stai?'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <form action="./server.php" method="post">
        <input type="text" name="Paragraph" placeholder= "Insert text">
        <input type="text" name="Password" placeholder= "Insert word">
        <button type="submit">
            Send
        </button>

    </form>
    
</body>
</html>