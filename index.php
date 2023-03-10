<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>World of Planes</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
<div id="head">
    <img src="">
    <h1>World of Planes</h1>
</div>
<div class="topNav">
    <a href="index.php" class="active">Home</a>
    <a href="Piston.php">Piston</a>
    <a href="Prop.php">Prop</a>
    <a href="Turboprop.php">Turboprop</a>
    <a href="Jet.php">Jet</a>
    <a href="Combat.php">Combat</a>
    <a href="Helicopter.php">Helicopter</a>
    <a href="Spacecraft.php">Spacecraft</a>
    <a href="Balloon.php">中国间谍气球</a>
</div>
<div class="grid">
    <div class="bodyStuff" id="info">
        <h2>What are aircraft?</h2>
        <p>The definition of aircraft is any plane, helicopter, or other machine capable of flight. This inculdes spaceships, hot air balloons, or blimp.</p>
    </div>
    <div class="bodyStuff" id="info">
        <h2>“Once you have tasted flight, you will forever walk the earth with your eyes turned skyward, for there you have been, and there you will always long to return.”</h2>
        <h3>~ Leonardo da Vinci</h3>
    </div>
</div>
<div class="grid2">
    <div id="newsSection1" class="bodyStuff">
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
            ?>
            <div id="articles">
            <?php
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
            ?>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="newsSection2" class="bodyStuff">
        <?php
        for ($i = 5; $i < 10; $i++) {
            ?>
            <div id="articles">
            <?php
            $newsImage = $articles[$i]['image'];
            echo "<img id='news' src=$newsImage width='100px' height='100px'/>";
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
            ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="whiteSpace"></div>
<div id="foot1"></div>
<div id="foot2"></div>
</body>
</html>