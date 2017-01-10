<html>
  <head>
    <title>SHIZZ POST BRAIN</title>
<style>
body {
    font-size: 14px;
    word-wrap: break-word;
    width: 420px;
}
</style>
  </head>
  <body>
  </body>
<?php 

$pageNo = rand(1, 6958);

$url = 'http://theshizz.org/forum/index.php/topic/1814-1160/page-';
$url .= $pageNo;

echo $url;

$content = file_get_contents($url);

//$first_step = explode( '<h1 itemprop="name" class="ipsType_pagetitle">' , $content );
$first_step = explode( "class='post entry-content " , $content );
//$second_step = explode("</h1>" , $first_step[1] );

//$first_step = explode( '<div itemprop="commentText" class="post entry-content">' , $content );
//$second_step = explode("<br></div>" , $first_step[1] );

//echo $first_step[0];
//echo $content;
//
echo '<pre>';
//for ($x = 0; $x <= 30; $x++) {

//echo "The number is: $x <br>";
echo "TEST_RANDOM_SHIZZ_POST_STRING: ";
//echo htmlspecialchars( $first_step[$x]);
$small = substr($first_step[rand(1, 15)], 0, 2000); // not sure if rand inclusive. posts per page works
//echo ($small);
echo "<p style='color:black;'>".$small."</p>";

//} 
echo '</pre>';

echo '<pre>';
//echo htmlspecialchars($content);
echo '</pre>';
echo $second_step[0];

?> 
</html>
