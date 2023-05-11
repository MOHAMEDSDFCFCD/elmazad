<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
</head>
<body>
    <p>operation success</p>
    <?php
        session_start();
        $user= $_SESSION['user_name'] ;
        print_r( $user);
        $user[0]->pass_word = 'nade97531#' ;
    
    
    ?>
</body>
</html>