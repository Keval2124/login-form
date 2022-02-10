<?php

session_start();

?>


<html lang="en">
<head>
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</body>
</html>
