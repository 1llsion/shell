<?php

function feedback404()
{
    echo"aww mau ngapain ahk";
}
if (isset($_GET['key'])) {
    $filename = "kw.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['key']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

?>
<!DOCTYPE html>
<html ⚡ lang="id" itemscope="itemscope" itemtype="https://schema.org/WebPage">
<head>
    <title><?= $BRANDS?> >> 💋 CINTA55 Situs Slot Online 2024!!!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta property="og:title" content="<?= $BRANDS?> >> 💋 CINTA55 Situs Slot Online 2024!!!" />
    <meta name="description"
        content="<?= $BRANDS;?> | Hanya di CINTA55 yang menjamin semua member itu mendapatkan bonus sebesar 30% untuk member baru apabila anda ingin mendapatkan bonus tersebut klik link daftar di bawah ini!!" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name='robots' content='index, follow' />
    <meta name="keyword" content="<?= $BRANDS?>, Slot Gacor, Slot Online, Slot Dana, amp slot, slot mpo, slot gacor hari ini, slot terpercaya, slot gampang maxwin">
    <meta name="author" content="<?= $BRANDS?>">
    <meta name="allow-search" content="yes" />
    <meta name="YahooSeeker" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="expires" content="never" />
    <meta name="rating" content="general">
    <meta name="publisher" content="<?= $BRANDS?>">
    <meta name="copyright" content="<?= $BRANDS?>">
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <meta name="expires" content="never">
    <meta name="geo.region" content="id_ID" />
    <meta name="geo.country" content="id" />
    <meta name="language" content="Id-ID" />
    <meta name="distribution" content="global" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="tgn.nation" content="Indonesia" />
    <meta name="supported-amp-formats" content="websites,stories,ads,email">
    <meta property="og:site_name" content="<?= $BRANDS?>" />
    <meta property="og:description"
        content="<?= $BRANDS;?> | Hanya di CINTA55 yang menjamin semua member itu mendapatkan bonus sebesar 30% untuk member baru apabila anda ingin mendapatkan bonus tersebut klik link daftar di bawah ini!! " />
    <meta property="og:type" content="WebPage" />
    <meta property="og:locale" content="id_ID" />
    <meta name="image" content="https://i.ibb.co/h2jVD0m/angkawin.jpg">
    <meta name="og:image" content="https://i.ibb.co/h2jVD0m/angkawin.jpg">
    <meta property="og:locale:alternate" content="id_ID" />
    <meta name="theme-color" content="var(--bgColor)">
    <link rel="canonical" href="<?= $urlPath;?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/XYhRZxT/asdasddas.png" type="image/x-icon" />
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <style amp-custom>
        :root {
            --bgColor: rgb(0, 0, 0);
            --black: #222222;
            --white: #eaeaea;
            --accentColor: #E6E6E6;
            --pink: #1e82b5;
            --cyan: #e6808a;
            --pink-hover: #F0FFFF;
            --cyan-hover: 	#F5F5DC;
            --rose: #001aff;
            --font: 'Karla', sans-serif;
            --firstName: 'John';
            --lastName: 'Doe';
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .animated.slow {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .animated.slower {
            -webkit-animation-duration: 3s;
            animation-duration: 3s
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }

            10%,
            20% {
                -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
                transform: scale3d(.9, .9, .9) rotate(-3deg)
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        .tada {
            -webkit-animation-name: tada;
            animation-name: tada
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3)
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .heartBeat {
            -webkit-animation-name: heartBeat;
            animation-name: heartBeat;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        body {
            background-color: var(--bgColor);
            overflow-x: hidden;
            overflow-y: hidden;
        }

        header {
            width: 50%;
            margin: 0 auto;
        }

        #image {
            display: block;
            margin: 4rem auto;
            border-radius: 10px;
            box-shadow: 0 0 15pt rgba(255, 255, 255, 0.3);
        }

        #links {
            width: 90%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .link1 {
            display: block;
            background-color: transparent;
            color: var(--white);
            font-family: var(--font);
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            text-decoration: none;
            font-size: 1rem;
            transition: all .25s cubic-bezier(.08, .59, .29, .99);
            border: solid var(--cyan-hover) 2px;
            border-radius: 10px;
        }

        .link1:hover {
            background-color: var(--pink-hover);
            color: var(--white);
        }

        .link2 {
            display: block;
            background-color: var(--cyan);
            color: var(--white);
            font-family: var(--font);
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            text-decoration: none;
            font-size: 1rem;
            transition: all .25s cubic-bezier(.08, .59, .29, .99);
            border: solid var(--black) 2px;
            border-radius: 10px;
        }

        .link2:hover {
            background-color: var(--cyan-hover);
            color: var(--white);
        }

        .rose {
            color: var(--rose);
        }

        .pinjam {
            margin: 4rem;
        }

        .abang {
            width: 100%;
            margin: 0 auto;
        }

        .abang p {
            margin: 4rem auto;
            text-align: center;
            color: var(--white);
            font-family: sans-serif;
        }

        h5 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--accentColor);
            font-family: var(--font);
            font-style: italic;
        }

        .font-normal {
            font-weight: 500;
        }

        h1 {
            text-align: center;
            color: var(--white);
            font-family: var(--font);
        }

        h6 {
            text-align: center;
            margin-bottom: 20px;
            color: rgb(136, 136, 136);
            font-family: var(--font);
        }

        a {
            font-size: 1rem;
            font-weight: 600;
            display: block;
            font-family: var(--font);
            width: 100%;
            text-decoration: none;
            color: var(--rose);
        }

        footer {
            color: var(--white);
            text-align: center;
            margin: 0 auto 2rem;
        }
    </style>
</head>

<body>
    <header>
        <amp-img id="image" class="animated tada infinite slower" src="https://i.ibb.co/h2jVD0m/angkawin.jpg"
        alt="<?= $BRANDS?>" width="200" height="100" layout="responsive"></amp-img>
    </header>
    <div class="created by pinjam">
        <h1 class="title animated heartBeat slow infinite">⭐ <?= $BRANDS?> ⭐</h1>
        <div class="pinjam abang">
            <p class="font-normal"><a href="<?= $urlPath;?>"><?= $BRANDS?></a>CINTA55 Web Slot online terpercaya di tahun ini, karena hanya di CINTA55 itu memberi bonus 30% dari total deposit member baru dan menggunakan link daftar di bawah ini!!</p>
        </div>
    </div>
    <div id="links">
        <a class="link1 animated fadeInLeft slow" href="https://rebrand.ly/seopp" target="_blank" rel="nofollow">DAFTAR <?= $BRANDS?></a>
        <a class="link2 animated fadeInRight slow" href="https://rebrand.ly/seopp" target="_blank" rel="nofollow">LOGIN <?= $BRANDS?></a>
        <a class="link1 animated fadeInLeft slow" href="https://rebrand.ly/seopp" target="_blank" rel="nofollow"><?= $BRANDS?> </a>
        <a class="link2 animated fadeInRight slow" href="https://rebrand.ly/seopp" target="_blank" rel="nofollow">LINK <?= $BRANDS?></a>
    </div>

    <footer class="animated fadeIn slow delay-1s">
        <span>&copy;2024 <a href="<?= $urlPath;?>" class="rose"><?= $BRANDS?></a>All Rights Reserved</span>
    </footer>
</body>

</html>
