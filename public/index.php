<?php
$pageTitle = "Meteopego Stazione";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<header class="topbar">

    <div class="logo">

        <h1>🌪 METEOPEGO</h1>

        <span>STAZIONE</span>

    </div>

    <div class="station-info">

        <strong>Marghera (VE)</strong><br>

        Aggiornamento dati...

    </div>

</header>

<nav>

    <ul>

        <li>Home</li>
        <li>Grafici</li>
        <li>Archivio</li>
        <li>Radar</li>
        <li>Centro Meteo</li>

    </ul>

</nav>

<main>

<section class="hero">

    <div class="temperature">

        --.- °C

    </div>

    <div class="condition">

        Attesa dati Meteobridge...

    </div>

</section>

<section class="cards">

<div class="card">
    <h3>💧 Umidità</h3>
    <p>-- %</p>
</div>

<div class="card">
    <h3>🌬 Vento</h3>
    <p>-- km/h</p>
</div>

<div class="card">
    <h3>🌧 Pioggia</h3>
    <p>-- mm</p>
</div>

<div class="card">
    <h3>📈 Pressione</h3>
    <p>---- hPa</p>
</div>

<div class="card">
    <h3>☀️ UV</h3>
    <p>--</p>
</div>

</section>

</main>

<footer>

Meteopego Stazione © <?php echo date('Y'); ?>

</footer>

<script src="js/app.js"></script>

</body>
</html>
