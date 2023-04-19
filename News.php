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


<?php
$apikey = 'a706b43f421c58dd41bffe79e85f462b';
$url = "https://gnews.io/api/v4/search?q=example&lang=en&country=us&max=10&apikey=$apikey";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = json_decode(curl_exec($ch), true);
curl_close($ch);
$articles = $data['articles'];

for ($i = 0; $i < count($articles); $i++) {
    // articles[i].title
    echo "Title: " . $articles[$i]['title'] . "\n";
    // articles[i].description
    echo "Description: " . $articles[$i]['description'] . "\n";
    // You can replace {property} below with any of the article properties returned by the API.
    // articles[i].{property}
    // echo $articles[$i]['{property}'] . "\n";

    // Delete this line to display all the articles returned by the request. Currently only the first article is displayed.
    break;
}
