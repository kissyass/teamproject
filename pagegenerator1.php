<?

$greet	=	$_POST['greet'];
$description	=	$_POST['description'];
$instagram	=	$_POST['instagram'];
$facebook		=	$_POST['facebook'];
$twitter		=	$_POST['twitter'];
$themes		=	$_POST['themes'];


if($themes=="basic")
{
	$strOut='<!DOCTYPE html>'
			.'<html>'
			.'<head>'
			.'<title>Basic theme</title>'
			.'<link rel="stylesheet"  href="design.css">'
			.'</head>'
			.'<body style="background-image:url(img/basicback.jpg);">'
			 . '<div class="basicbord">'
			  .  '<div class="basiccircle">'
			   .  ' <div class="basiccircle2">'
			    .  '  <div class="basicintro">'
			     .    ' <h1>'.$greet.'</h1>'
			      .    '<p>'.$description.'</p>'
			       .   '<p>'
			       .'     <a href="'.$instagram.'" target="blank"><img src="img/instagram.png"></a>'
			        .'    <a href="'.$facebook.'"target="blank"><img src="img/facebook.png"></a>'
			         . '  <a href="'.$twitter.'" target="blank"><img src="img/twitter.png"></a>'
			          .'</p>'
			      . ' </div>'
			      .'</div>'
			   . '</div>'
			  .'</div>'
			.'</body>'
			.'</html>'; 

} else if($themes=="classical"){
	$strOut='<!DOCTYPE html>
			<html>
			<head>
			  <title>Classical theme</title>
			  <link rel="stylesheet"  href="design.css">
			</head>
			<body style="background-image:url(img/classicalback.jpg);">
			  <div class="classicalbord">
			        <div class="classicalintro">
			          <div class="star"><img src="img/star1.png"></div>
			          <h1>'.$greet.'</h1>
			          <p>'.$description.'</p>
			          <p>
			            <a href='.$instagram.' target="blank"><img src="img/instagram.png"></a>
			            <a href="'.$facebook.'" target="blank"><img src="img/facebook.png"></a>
			            <a href='.$twitter.' target="blank"><img src="img/twitter.png"></a>
			          </p>
			        </div>
			  </div>
			</body>
			</html>';
} else if($themes=="dreamy"){
	$strOut = '<!DOCTYPE html>
				<html>
					<head>
					  <title>Dreamy theme</title>
					  <link rel="stylesheet"  href="design.css">
					</head>
					<body style="background-image:none; background-color: #f6faf8;">
					  <div class="dreamybord">
					        <div class="dreamyintro">
					          <div class="flower"><img src="img/dreamyflower.png"></div>
					          <h1>'.$greet.'</h1>
					          <p>'.$description.'</p>
					          <p>
					            <a href='.$instagram.' target="blank"><img src="img/instagram.png"></a>
						        <a href='.$facebook.' target="blank"><img src="img/facebook.png"></a>
						        <a href='.$twitter.' target="blank"><img src="img/twitter.png"></a>
					          </p>
					          <div class="flower"><img src="img/dreamyflower.png"></div>
					        </div>
					  </div>
					</body>
					</html>';
  
}
		$f = fopen("test.html", "w"); 
fwrite($f, $strOut); 
fclose($f);

echo('<!DOCTYPE html>
<html>
<head>
  <title>Load</title>
  <link rel="stylesheet"  href="design.css">
</head>
<body style="background-image:url(img/loadback.jpg);">
  <div class="load">
    <P><a href="test.html">Click here to get your page</a></P>
  </div>

</body>
</html>');


?>


