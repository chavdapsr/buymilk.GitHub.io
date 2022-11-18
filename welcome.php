<?php

include('session.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <h1>welcome <?php echo $login_session; ?></h1>
    <h2><a href="signin/index.html">sign out</a></h2>
</body>
</html>