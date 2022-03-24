<?php
$ip = $_SERVER['REMOTE_ADDR'] . "\n";
file_put_contents('ip.log', $ip, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roovie - ComingSoon</title>
    <link rel="stylesheet" href="/dist/style.css">
    <link rel="icon" type="image/x-icon" href="/logo.png">
</head>

<body>
    <div class="background">
        <canvas id="beerCanvas"></canvas>
    </div>
    <div class="main">
        <div class=>
            <div id='content' unselectable="on">
                <div class="logo">
                    <img src="/logo.png">
                </div>
                <div class='title' unselectable="on">
                    <span unselectable="on">Roovie</span>
                </div>
                <p class="text" unselectable="on">coming soon</p>
                <section>
                    <ul id="countdown">
                        <li>
                            <span class="days timenumbers">01</span>
                            <p class="timeRefDays timedescription">days</p>
                        </li>
                        <li>
                            <span class="hours timenumbers">00</span>
                            <p class="timeRefHours timedescription">hours</p>
                        </li>
                        <li>
                            <span class="minutes timenumbers">00</span>
                            <p class="timeRefMinutes timedescription">minutes</p>
                        </li>
                        <li>
                            <span class="seconds timenumbers yellow-text">00</span>
                            <p class="timeRefSeconds timedescription">seconds</p>
                        </li>
                    </ul>
                </section>
                <p class="" text unselectable="on">By Techano</p>
            </div>
        </div>
    </div>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/scripts.js"></script>
</body>

</html>