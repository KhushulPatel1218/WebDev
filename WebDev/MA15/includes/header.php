<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro Web Developement</title>
</head>
<body>
    <header>
        <h1>My Blog</h1>
</header>

    <nav>
        <ul>
        
        <li><a href="/~patelk64/MA15/">Home</a></li>
        <?php if (Auth::isLoggedIn()): ?>

        <li><a href="/~patelk64/MA15/admin/">Admin</a></li>
        <li><a href="/~patelk64/MA15/logout.php">Log out</a></li>
        <?php else: ?>
        <li><a href="/~patelk64/MA15/login.php">Log in</a></li>

        <?php endif; ?>
        </ul>

    </nav>

<main>
    