<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro Web Developement</title>
</head >
<body style="background-color:#7C8B00">
    <header>
        <h1 style="background-color:DodgerBlue;">Khushul Patels Website</h1>
</header>

    <nav>
        <ul style="background-color:DodgerBlue;">
        
        <li><a href="/~patelk64/MA16/"><button type="button">Home</button></a></li>
        <?php if (Auth::isLoggedIn()): ?>

        <li><a href="/~patelk64/MA16/admin/"><button type="button">Admin</button></a></li>
        <li><a href="/~patelk64/MA16/logout.php"><button type="button">Log out</button></a></li>
        <?php else: ?>
        <li><a href="/~patelk64/MA16/login.php"><button type="button">Log in</button></a></li>

        <?php endif; ?>
        </ul>

    </nav>

<main>
    