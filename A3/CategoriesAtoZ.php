<html>
	<heady>
		<link href="./CISC282CookBook.css" type= "text/css" rel="stylesheet" > 
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<title> The Recipe Book </title>
	</heady>
	<body>

	<script type="text/javascript">
    google_ad_client = "ca-pub-5493170330729204";
    google_ad_slot = "4712656283";
    google_ad_width = 336;
    google_ad_height = 280;
	</script>
	<!-- anotherAd -->
	<script type="text/javascript"
	src="//pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- FirstAdd -->
	<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-5493170330729204"
     data-ad-slot="3912077482"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- secondAd -->
	<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5493170330729204"
     data-ad-slot="1223819481"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- thirdAd -->
	<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5493170330729204"
     data-ad-slot="2700552687"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- diablo6 -->
	<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-5493170330729204"
     data-ad-slot="1361590284"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>


	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55726459-1', 'auto');
  ga('send', 'pageview');
	</script>

	<center><img src="recipeBook.jpg" alt="Recipe Book" style="width:304px;height:228px"></center>







	<p>
	<br />
	How would you like the information sorted? 
	</p>

	<form action="AtoZ.php" method="get">
	<input type="hidden" name="act" value="run">
	<input type="submit" value="Food - Alphabetically from A to Z">
	</form>
	<form action="CategoriesAtoZ.php" method="get">
	<input type="hidden" name="act" value="run">
	<input type="submit" value="Categories - Alphabetically from A to Z">
	</form>
	<form action="FoodAndCategoriesAtoZ.php" method="get">
	<input type="hidden" name="act" value="run">
	<input type="submit" value="Food and Categories - Alphabetically from A to Z">
	</form>

<?php	
$file = "classrecipes.txt";
$rFile = fopen($file, "r");
$foodArray = [];
$typeArray = [];
$addressArray = [];
 
if ($rFile) {
    $j = 0;
    while(! feof($rFile)) 
    {
        $recipeLine = fgets($rFile);
        	$tempArray = explode("|", $recipeLine);
        		$foodArray[$j] = $tempArray[1];
        			$typeArray[$j] = $tempArray[2];
        if ($tempArray[3][0] !== "h") {
            $addressArray[$j] = "http://" . $tempArray[3]; 
        }
        else 
        {
            $addressArray[$j] = $tempArray[3];
        }
        $j++;
    }
}
else {
    exit("Error loading $file");
}

$uniqueCategories = array_unique($typeArray); 
sort($uniqueCategories);
	foreach($uniqueCategories as $category) {
    		$j = 0;
    		echo "<h2>$category</h2>\n\n";
    	while ($j < count($foodArray))
    	 {
        	if ($typeArray[$j] === $category)
        	 {
            		echo "<p>";
            			echo "<a href=\"$addressArray[$j]\" style=\"text-decoration: none\">$foodArray[$j]</a>";
            				echo "</p>\n";
        	}
        	$j++;
    	}
    	echo "\n";
	}


fclose($rFile);

?>
	



	</body>
</html>