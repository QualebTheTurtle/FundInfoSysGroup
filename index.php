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
// Markdown Converter and Loader
		$posts = scandir("md/"); // gets markdown files from md directory
		foreach ($posts as $p) { // iterates through $posts
			if (preg_match('/^.+\.(md)$/',$p)) { // RegularExpression that gets only the .md files
				$md = file_get_contents('md/' . $p); // gets the content of the md file
				$md = $parser->text($md); // uses parser to create md section
				echo "\n";
				echo "<!--BLOG-POST-->\n"; // adds a comment
				echo "<div id='blog-post'>\n"; // creates a division for the content
				echo $md . "\n"; // echos out converted markdown
				echo "</div>\n";
			}
		}
		echo "\n";
	 ?>
	 </main>
</body>
</html>


