<?php 
$text = $_POST ['Paragraph'];
?>

<?php 

$text = $_POST ['Paragraph'];
$wordToBan = $_POST ['Password'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>

<p>
   <h2>
   Display the paragragh writed by the current user.
   </h2>
   
  
   <?php echo $text ?>  Its entire lenght: <?php  echo strlen($text) ?>;
   
</p>

<p>

    <h2>
        Word Hidden
    </h2>

    <p>
        <?php 
         $lettersHidden = array('a', 'e', 'i');
         $showAsteriks = array ('*', '*', '*');

         echo $newWord = str_replace( $lettersHidden , $showAsteriks, $wordToBan);
         
         
         
        ?>

    </p>

    <p>
        <h2>
          Display the paragragh writed by the current user.
        </h2>
   
        <?php echo $text ?>  Its entire lenght: <?php  echo strlen($text) ?>;
   
    </p>

    
</body>
</html>