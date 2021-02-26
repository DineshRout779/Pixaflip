<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixaflip Pathology</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/357dd17236.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>


    <header>
        <div class="header container">
            <a href="#" class="logo">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Pixaflip Pathology
            </a>

            <a href="#" class="profile">Profile</a>
            <a href="index.html">Log out</a>
        </div>
    </header>



    <main>
        <div class="container">
            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
        </div>
    </main>

</body>

</html>