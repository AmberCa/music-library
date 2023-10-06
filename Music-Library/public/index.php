<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cd67d7f0d4.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Music</title>
</head>
<body>
    <header>
        <i class="fa-duotone fa-music" style="--fa-primary-opacity: 0.9; --fa-secondary-opacity: 0.6;"></i>
    </header>
    <ul class= "list">
        <?php
            for($i = 0; $i < 10; $i++){
                include '../data.php';
                echo '<li class= "list-item">'.
                    '<h2 class= "item--h2">'.
                    $libary[$i]['name'].
                    '</h2>'.'<img src="'.$libary[$i]['afbelding'].'" alt="cover van nummer">'.
                    '<h4 class= "item--h4">'.
                    $libary[$i]['artiest'].
                    '</h4>'.'<p class= "item--p">'.
                    $libary[$i]['genre'].
                    '</p>'.
                    '</li>';
            };
        ?>
    </ul>
    
    
    

</body>
</html>
