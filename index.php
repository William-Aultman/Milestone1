<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <title>World of Planes</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
<header>
    <img src="">
    <h1>World of Planes</h1>
</header>
<nav>
    <a href="Piston.php">Piston</a>
    <a href="Prop.php">Prop</a>
    <a href="Turboprop.php">Turboprop</a>
    <a href="Jet.php">Jet</a>
    <a href="Combat.php">Combat</a>
    <a href="Helicopter.php">Helicopter</a>
    <a href="Spacecraft.php">Spacecraft</a>
</nav>
<div>
    <h2>What are aircraft?</h2>
    <p>The definition of aircraft is any plane, helicopter, or other machine capable of flight. This inculdes spaceships, hot air balloons, or blimp.</p>
</div>
<div id="newsSection1">
    <?php
    $apikey = 'a706b43f421c58dd41bffe79e85f462b';
    $url = "https://gnews.io/api/v4/search?q=aircraft&lang=en&country=us&max=10&apikey=$apikey";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = json_decode(curl_exec($ch), true);
    curl_close($ch);
    $articles = $data['articles'];

    for ($i = 0; $i < 5; $i++) {
        $newsImage = $articles[$i]['image'];
        echo " <img id='news' src=$newsImage width='100px' height='100px'/>";
        echo nl2br ("\n");
        echo nl2br ("\n");
        // articles[i].title
        echo nl2br ("Title: " . $articles[$i]['title'] . "\n");
        // articles[i].description
        echo nl2br ("Description: " . $articles[$i]['description'] . "\n");
        echo " <a href=".$articles[$i]['url'].">Source</a>";
        echo nl2br ("\n");
        // You can replace {property} below with any of the article properties returned by the API.
        // articles[i].{property}
        // echo $articles[$i]['{property}'] . "\n";
        echo nl2br ("\n");
    }
    ?>
</div>
<div id="newsSection2">
    <?php
    for ($i = 5; $i < 10; $i++) {
        $newsImage = $articles[$i]['image'];
        echo " <img id='news' src=$newsImage width='100px' height='100px'/>";
        echo nl2br ("\n");
        echo nl2br ("\n");
        // articles[i].title
        echo nl2br ("Title: " . $articles[$i]['title'] . "\n");
        // articles[i].description
        echo nl2br ("Description: " . $articles[$i]['description'] . "\n");
        echo " <a href=".$articles[$i]['url'].">Source</a>";
        echo nl2br ("\n");
        // You can replace {property} below with any of the article properties returned by the API.
        // articles[i].{property}
        // echo $articles[$i]['{property}'] . "\n";
        echo nl2br ("\n");
    }
    ?>
</div>
</body>