<?php 
require_once __DIR__ . '/vendor/autoload.php';

$parser = new Parsedown();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8"/>
	<title>Programming Future</title>
	<link rel="stylesheet" type="text/css" href="css/Default.css">
</head>
<body>
	<main>
	<?php 
		$posts = scandir("md/");
		foreach ($posts as $p) {
			if (preg_match('/\W.md/',$p)) {
				$md = file_get_contents('md/' . $p);
				$md = $parser->text($md);
				echo $md;
			}
		}
	 ?>
	 </main>
</body>
</html>
