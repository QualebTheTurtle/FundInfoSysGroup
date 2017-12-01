<?php 
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);
require VENDOR . 'autoload.php';
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<script src="https://use.fontawesome.com/4c9c134f39.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8"/>
		<title>SDG Home</title>
		<link href="css/Default.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="wrapper">
			<nav>
				<div class="nav-img"><a href="index.html"><img src="styles/grnSDG.png" alt="cat"></a></div>
				<div class="nav-links">
					<a id="nav-index" href="index.html">Home</a>
					<a id="nav-about" href="#">About</a>
					<a id="nav-projects" href="#">Projects</a>
				</div> 
			</nav>

			<header>
				<h1>Software</h1><h1>Development</h1><h1>Guild</h1>
				<a href="https://github.com/Demibro/Stark-State-College-SDG-App"><i class="fa fa-github-square" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/Stark-State-College-Software-Development-Guild-1519047618176936/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://twitter.com/software_guild"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
			</header>

			<article class="main">  

<?php
$md = new Controller\MarkdownLoader();
echo $md();
?>
			</article>


			<footer>
				<section id="contact">
					<h4>Contact:&nbsp;</h4>
					<p>President Namey McNamerson&nbsp;</p>
					<p><a href="mailto:MR_prezzz@dudeguy.com">MR_prezzz@dudeguy.com</a></p>
				</section>
				<section id="copyright">
					<p>&copy; 2017 SSC Software Development Guild</p>
				</section>
			</footer>

		</div>

	</body>
</html>


